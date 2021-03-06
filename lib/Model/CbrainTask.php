<?php
/**
 * CbrainTask
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CBRAIN API
 *
 * API for interacting with the CBRAIN Platform
 *
 * OpenAPI spec version: 6.2.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.27
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;
use \Swagger\Client\ObjectSerializer;

/**
 * CbrainTask Class Doc Comment
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CbrainTask implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CbrainTask';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'int',
        'type' => 'string',
        'user_id' => 'int',
        'group_id' => 'int',
        'bourreau_id' => 'int',
        'tool_config_id' => 'int',
        'batch_id' => 'int',
        'params' => 'object',
        'status' => 'string',
        'created_at' => 'string',
        'updated_at' => 'string',
        'run_number' => 'int',
        'results_data_provider_id' => 'int',
        'cluster_workdir_size' => 'int',
        'workdir_archived' => 'string',
        'workdir_archive_userfile_id' => 'int',
        'description' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => 'int64',
        'type' => null,
        'user_id' => 'int64',
        'group_id' => 'int64',
        'bourreau_id' => 'int64',
        'tool_config_id' => 'int64',
        'batch_id' => 'int64',
        'params' => null,
        'status' => null,
        'created_at' => 'dateTime',
        'updated_at' => 'dateTime',
        'run_number' => 'int64',
        'results_data_provider_id' => 'int64',
        'cluster_workdir_size' => 'int64',
        'workdir_archived' => 'boolean',
        'workdir_archive_userfile_id' => 'int64',
        'description' => null
    ];

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
        'id' => 'id',
        'type' => 'type',
        'user_id' => 'user_id',
        'group_id' => 'group_id',
        'bourreau_id' => 'bourreau_id',
        'tool_config_id' => 'tool_config_id',
        'batch_id' => 'batch_id',
        'params' => 'params',
        'status' => 'status',
        'created_at' => 'created_at',
        'updated_at' => 'updated_at',
        'run_number' => 'run_number',
        'results_data_provider_id' => 'results_data_provider_id',
        'cluster_workdir_size' => 'cluster_workdir_size',
        'workdir_archived' => 'workdir_archived',
        'workdir_archive_userfile_id' => 'workdir_archive_userfile_id',
        'description' => 'description'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'type' => 'setType',
        'user_id' => 'setUserId',
        'group_id' => 'setGroupId',
        'bourreau_id' => 'setBourreauId',
        'tool_config_id' => 'setToolConfigId',
        'batch_id' => 'setBatchId',
        'params' => 'setParams',
        'status' => 'setStatus',
        'created_at' => 'setCreatedAt',
        'updated_at' => 'setUpdatedAt',
        'run_number' => 'setRunNumber',
        'results_data_provider_id' => 'setResultsDataProviderId',
        'cluster_workdir_size' => 'setClusterWorkdirSize',
        'workdir_archived' => 'setWorkdirArchived',
        'workdir_archive_userfile_id' => 'setWorkdirArchiveUserfileId',
        'description' => 'setDescription'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'type' => 'getType',
        'user_id' => 'getUserId',
        'group_id' => 'getGroupId',
        'bourreau_id' => 'getBourreauId',
        'tool_config_id' => 'getToolConfigId',
        'batch_id' => 'getBatchId',
        'params' => 'getParams',
        'status' => 'getStatus',
        'created_at' => 'getCreatedAt',
        'updated_at' => 'getUpdatedAt',
        'run_number' => 'getRunNumber',
        'results_data_provider_id' => 'getResultsDataProviderId',
        'cluster_workdir_size' => 'getClusterWorkdirSize',
        'workdir_archived' => 'getWorkdirArchived',
        'workdir_archive_userfile_id' => 'getWorkdirArchiveUserfileId',
        'description' => 'getDescription'
    ];

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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['user_id'] = isset($data['user_id']) ? $data['user_id'] : null;
        $this->container['group_id'] = isset($data['group_id']) ? $data['group_id'] : null;
        $this->container['bourreau_id'] = isset($data['bourreau_id']) ? $data['bourreau_id'] : null;
        $this->container['tool_config_id'] = isset($data['tool_config_id']) ? $data['tool_config_id'] : null;
        $this->container['batch_id'] = isset($data['batch_id']) ? $data['batch_id'] : null;
        $this->container['params'] = isset($data['params']) ? $data['params'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['updated_at'] = isset($data['updated_at']) ? $data['updated_at'] : null;
        $this->container['run_number'] = isset($data['run_number']) ? $data['run_number'] : null;
        $this->container['results_data_provider_id'] = isset($data['results_data_provider_id']) ? $data['results_data_provider_id'] : null;
        $this->container['cluster_workdir_size'] = isset($data['cluster_workdir_size']) ? $data['cluster_workdir_size'] : null;
        $this->container['workdir_archived'] = isset($data['workdir_archived']) ? $data['workdir_archived'] : null;
        $this->container['workdir_archive_userfile_id'] = isset($data['workdir_archive_userfile_id']) ? $data['workdir_archive_userfile_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
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
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id Unique identifier for the Task.
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The task type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets user_id
     *
     * @return int
     */
    public function getUserId()
    {
        return $this->container['user_id'];
    }

    /**
     * Sets user_id
     *
     * @param int $user_id ID of the User who created the Task.
     *
     * @return $this
     */
    public function setUserId($user_id)
    {
        $this->container['user_id'] = $user_id;

        return $this;
    }

    /**
     * Gets group_id
     *
     * @return int
     */
    public function getGroupId()
    {
        return $this->container['group_id'];
    }

    /**
     * Sets group_id
     *
     * @param int $group_id ID of the group that this task is being run in.
     *
     * @return $this
     */
    public function setGroupId($group_id)
    {
        $this->container['group_id'] = $group_id;

        return $this;
    }

    /**
     * Gets bourreau_id
     *
     * @return int
     */
    public function getBourreauId()
    {
        return $this->container['bourreau_id'];
    }

    /**
     * Sets bourreau_id
     *
     * @param int $bourreau_id ID of the Bourreau the Task was launched on.
     *
     * @return $this
     */
    public function setBourreauId($bourreau_id)
    {
        $this->container['bourreau_id'] = $bourreau_id;

        return $this;
    }

    /**
     * Gets tool_config_id
     *
     * @return int
     */
    public function getToolConfigId()
    {
        return $this->container['tool_config_id'];
    }

    /**
     * Sets tool_config_id
     *
     * @param int $tool_config_id ID number that specifies which Tool Config to use. The Tool Config specifies environment variables and other system-specific scripts necessary for the Task to be run in the target environment.
     *
     * @return $this
     */
    public function setToolConfigId($tool_config_id)
    {
        $this->container['tool_config_id'] = $tool_config_id;

        return $this;
    }

    /**
     * Gets batch_id
     *
     * @return int
     */
    public function getBatchId()
    {
        return $this->container['batch_id'];
    }

    /**
     * Sets batch_id
     *
     * @param int $batch_id ID of the batch this task was launched as part of. Batches of tasks consist of the same task, with the same parameters, being run on many different input files.
     *
     * @return $this
     */
    public function setBatchId($batch_id)
    {
        $this->container['batch_id'] = $batch_id;

        return $this;
    }

    /**
     * Gets params
     *
     * @return object
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param object $params Parameters used as inputs to the scientific calculation associated with the task.
     *
     * @return $this
     */
    public function setParams($params)
    {
        $this->container['params'] = $params;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status Current status of the task.
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param string $created_at Date created.
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param string $updated_at Last updated.
     *
     * @return $this
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets run_number
     *
     * @return int
     */
    public function getRunNumber()
    {
        return $this->container['run_number'];
    }

    /**
     * Sets run_number
     *
     * @param int $run_number The number of times that this task was run.
     *
     * @return $this
     */
    public function setRunNumber($run_number)
    {
        $this->container['run_number'] = $run_number;

        return $this;
    }

    /**
     * Gets results_data_provider_id
     *
     * @return int
     */
    public function getResultsDataProviderId()
    {
        return $this->container['results_data_provider_id'];
    }

    /**
     * Sets results_data_provider_id
     *
     * @param int $results_data_provider_id ID of the Data Provider that contains the Userfile that represents the results of the task.
     *
     * @return $this
     */
    public function setResultsDataProviderId($results_data_provider_id)
    {
        $this->container['results_data_provider_id'] = $results_data_provider_id;

        return $this;
    }

    /**
     * Gets cluster_workdir_size
     *
     * @return int
     */
    public function getClusterWorkdirSize()
    {
        return $this->container['cluster_workdir_size'];
    }

    /**
     * Sets cluster_workdir_size
     *
     * @param int $cluster_workdir_size size of workdirectory
     *
     * @return $this
     */
    public function setClusterWorkdirSize($cluster_workdir_size)
    {
        $this->container['cluster_workdir_size'] = $cluster_workdir_size;

        return $this;
    }

    /**
     * Gets workdir_archived
     *
     * @return string
     */
    public function getWorkdirArchived()
    {
        return $this->container['workdir_archived'];
    }

    /**
     * Sets workdir_archived
     *
     * @param string $workdir_archived Boolean variable that indicates whether the working directory of the task is available on the processing server or has been archived and is no longer accessible.
     *
     * @return $this
     */
    public function setWorkdirArchived($workdir_archived)
    {
        $this->container['workdir_archived'] = $workdir_archived;

        return $this;
    }

    /**
     * Gets workdir_archive_userfile_id
     *
     * @return int
     */
    public function getWorkdirArchiveUserfileId()
    {
        return $this->container['workdir_archive_userfile_id'];
    }

    /**
     * Sets workdir_archive_userfile_id
     *
     * @param int $workdir_archive_userfile_id ID of the userfile created as part of the archival process, if the working directory of the task has been archived.
     *
     * @return $this
     */
    public function setWorkdirArchiveUserfileId($workdir_archive_userfile_id)
    {
        $this->container['workdir_archive_userfile_id'] = $workdir_archive_userfile_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description Description of the Task.
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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


