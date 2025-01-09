<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdatePool;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $PoolArn
 * @property string $PoolId
 * @property 'CREATING'|'ACTIVE'|'DELETING' $Status
 * @property 'TRANSACTIONAL'|'PROMOTIONAL' $MessageType
 * @property bool $TwoWayEnabled
 * @property string $TwoWayChannelArn
 * @property string $TwoWayChannelRole
 * @property bool $SelfManagedOptOutsEnabled
 * @property string $OptOutListName
 * @property bool $SharedRoutesEnabled
 * @property bool $DeletionProtectionEnabled
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class UpdatePoolResponse extends Response
{
}
