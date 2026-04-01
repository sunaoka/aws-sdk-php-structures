<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\CreateRcsAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RcsAgentArn
 * @property string $RcsAgentId
 * @property 'CREATED'|'PENDING'|'TESTING'|'PARTIAL'|'ACTIVE'|'DELETED' $Status
 * @property bool $DeletionProtectionEnabled
 * @property string|null $OptOutListName
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property bool $SelfManagedOptOutsEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool $TwoWayEnabled
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateRcsAgentResponse extends Response
{
}
