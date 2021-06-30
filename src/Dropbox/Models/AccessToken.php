<?php
namespace Kunnu\Dropbox\Models;

class AccessToken extends BaseModel
{
    /**
     * Access Token
     *
     * @var string
     */
    protected $token;

    /**
     * Refresh Token
     *
     * @var string
     */
    protected $refreshToken;

    /**
     * Expire time
     *
     * @var int
     */
    protected $expireTime;

    /**
     * Token Type
     *
     * @var string
     */
    protected $tokenType;

    /**
     * Bearer
     *
     * @var string
     */
    protected $bearer;

    /**
     * User ID
     *
     * @var string
     */
    protected $uid;

    /**
     * Account ID
     *
     * @var string
     */
    protected $accountId;

    /**
     * Team ID
     *
     * @var string
     */
    protected $teamId;

    /**
     * Create a new AccessToken instance
     *
     * @param array $data
     */
    public function __construct(array $data)
    {
        parent::__construct($data);

        $this->token = $this->getDataProperty('access_token');
        $this->refreshToken = $this->getDataProperty('refresh_token');
        $this->expireTime = time() + $this->getDataProperty('expires_in');
        $this->tokenType = $this->getDataProperty('token_type');
        $this->bearer = $this->getDataProperty('bearer');
        $this->uid = $this->getDataProperty('uid');
        $this->accountId = $this->getDataProperty('account_id');
        $this->teamId = $this->getDataProperty('team_id');
    }

    /**
     * Get Access Token
     *
     * @return string
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Get Refresh Token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * Get Expire Time
     *
     * @return int
     */
    public function getExpireTime()
    {
        return $this->expireTime;
    }

    /**
     * Get Token Type
     *
     * @return string
     */
    public function getTokenType()
    {
        return $this->tokenType;
    }

    /**
     * Get Bearer
     *
     * @return string
     */
    public function getBearer()
    {
        return $this->bearer;
    }

    /**
     * Get User ID
     *
     * @return string
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * Get Account ID
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Get Team ID
     *
     * @return string
     */
    public function getTeamId()
    {
        return $this->teamId;
    }
}
