<?php
/**
 * Created by PhpStorm.
 * User: lrf141
 * Date: 18/08/30
 * Time: 2:26
 */

namespace Lrf141\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Tool\ArrayAccessorTrait;

class MastodonResourceOwner implements ResourceOwnerInterface
{
    use ArrayAccessorTrait;

    /**
     * @var array
     */
    protected $response;

    public function __construct(array $response = array())
    {
        $this->response = $response;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->getValueByKey($this->response, 'id');
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->getValueByKey($this->response, 'username');
    }

    /**
     * @return string
     */
    public function getAcct()
    {
        return $this->getValueByKey($this->response, 'acct');
    }

    /**
     * @return string
     */
    public function getDisplayName()
    {
        return $this->getValueByKey($this->response, 'display_name');
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->getValueByKey($this->response, 'url');
    }

    /**
     * @return string
     */
    public function getAvatar()
    {
        return $this->getValueByKey($this->response, 'avatar');
    }

    /**
     * @return string
     */
    public function getAvatarStatic()
    {
        return $this->getValueByKey($this->response, 'avatar_static');
    }

    /**
     * @return string
     */
    public function getHeader()
    {
        return $this->getValueByKey($this->response, 'header');
    }

    /**
     * @return string
     */
    public function getHeaderStatic()
    {
        return $this->getValueByKey($this->response, 'header_static');
    }

    /**
     * @return string
     */
    public function getNote()
    {
        return $this->getValueByKey($this->response, 'note');
    }

    /**
     * @return integer
     */
    public function getFollowersCount()
    {
        return $this->getValueByKey($this->response, 'followers_count');
    }

    /**
     * @return integer
     */
    public function getFollowingCount()
    {
        return $this->getValueByKey($this->response, 'following_count');
    }

    /**
     * @return integer
     */
    public function getStatusesCount()
    {
        return $this->getValueByKey($this->response, 'statuses_count');
    }

    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->getValueByKey($this->response, 'created_at');
    }

    /**
     * @return array
     */
    public function toArray()
    {
        return $this->response;
    }
}
