<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventBusArn
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\StorageConfigurationOutput|null $StorageConfiguration
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'ACTIVE'|'DELETE_FAILED'|null $State
 * @property string|null $StateReason
 */
class DescribeEventBusResponse extends Response
{
}
