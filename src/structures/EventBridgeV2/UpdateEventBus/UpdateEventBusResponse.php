<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\UpdateEventBus;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $EventBusArn
 * @property string|null $Name
 * @property string|null $Description
 * @property Shapes\EncryptionConfiguration|null $EncryptionConfiguration
 * @property Shapes\StorageConfigurationOutput|null $StorageConfiguration
 * @property 'CREATING'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'ACTIVE'|'DELETE_FAILED'|null $State
 * @property string|null $StateReason
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 */
class UpdateEventBusResponse extends Response
{
}
