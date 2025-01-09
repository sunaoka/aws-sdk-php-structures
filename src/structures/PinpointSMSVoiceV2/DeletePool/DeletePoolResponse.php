<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\DeletePool;

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
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 */
class DeletePoolResponse extends Response
{
}
