<?php
/**
 * OauthRefreshTokenResponseData
 *
 * PHP version 5
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */

/**
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 1.0.0
 *
 */

namespace Douyin\Open\Model;

use \ArrayAccess;
use \Douyin\Open\ObjectSerializer;

/**
 * OauthRefreshTokenResponseData Class Doc Comment
 *
 * @category Class
 * @package  Douyin\Open
 * @author   抖音小开
 */
class OauthRefreshTokenResponseData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'OauthRefresh_tokenResponseData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'error_code' => 'string',
'description' => 'string',
'access_token' => 'string',
'expires_in' => 'string',
'refresh_token' => 'string',
'open_id' => 'string',
'scope' => 'string'    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'error_code' => null,
'description' => null,
'access_token' => null,
'expires_in' => null,
'refresh_token' => null,
'open_id' => null,
'scope' => null    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'error_code' => 'error_code',
'description' => 'description',
'access_token' => 'access_token',
'expires_in' => 'expires_in',
'refresh_token' => 'refresh_token',
'open_id' => 'open_id',
'scope' => 'scope'    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'error_code' => 'setErrorCode',
'description' => 'setDescription',
'access_token' => 'setAccessToken',
'expires_in' => 'setExpiresIn',
'refresh_token' => 'setRefreshToken',
'open_id' => 'setOpenId',
'scope' => 'setScope'    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'error_code' => 'getErrorCode',
'description' => 'getDescription',
'access_token' => 'getAccessToken',
'expires_in' => 'getExpiresIn',
'refresh_token' => 'getRefreshToken',
'open_id' => 'getOpenId',
'scope' => 'getScope'    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }



    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['error_code'] = isset($data['error_code']) ? $data['error_code'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['access_token'] = isset($data['access_token']) ? $data['access_token'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['refresh_token'] = isset($data['refresh_token']) ? $data['refresh_token'] : null;
        $this->container['open_id'] = isset($data['open_id']) ? $data['open_id'] : null;
        $this->container['scope'] = isset($data['scope']) ? $data['scope'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets error_code
     *
     * @return \Douyin\Open\Model\ErrorCode
     */
    public function getErrorCode()
    {
        return $this->container['error_code'];
    }

    /**
     * Sets error_code
     *
     * @param \Douyin\Open\Model\ErrorCode $error_code error_code
     *
     * @return $this
     */
    public function setErrorCode($error_code)
    {
        $this->container['error_code'] = $error_code;

        return $this;
    }

    /**
     * Gets description
     *
     * @return \Douyin\Open\Model\Description
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param \Douyin\Open\Model\Description $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets access_token
     *
     * @return string
     */
    public function getAccessToken()
    {
        return $this->container['access_token'];
    }

    /**
     * Sets access_token
     *
     * @param string $access_token 接口调用凭证
     *
     * @return $this
     */
    public function setAccessToken($access_token)
    {
        $this->container['access_token'] = $access_token;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return string
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param string $expires_in 过期时间，单位（秒）
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets refresh_token
     *
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->container['refresh_token'];
    }

    /**
     * Sets refresh_token
     *
     * @param string $refresh_token 用户刷新
     *
     * @return $this
     */
    public function setRefreshToken($refresh_token)
    {
        $this->container['refresh_token'] = $refresh_token;

        return $this;
    }

    /**
     * Gets open_id
     *
     * @return string
     */
    public function getOpenId()
    {
        return $this->container['open_id'];
    }

    /**
     * Sets open_id
     *
     * @param string $open_id 当前应用下，授权用户唯一标识
     *
     * @return $this
     */
    public function setOpenId($open_id)
    {
        $this->container['open_id'] = $open_id;

        return $this;
    }

    /**
     * Gets scope
     *
     * @return string
     */
    public function getScope()
    {
        return $this->container['scope'];
    }

    /**
     * Sets scope
     *
     * @param string $scope 用户授权的作用域
     *
     * @return $this
     */
    public function setScope($scope)
    {
        $this->container['scope'] = $scope;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}
