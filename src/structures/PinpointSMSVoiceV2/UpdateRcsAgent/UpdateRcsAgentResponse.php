<?php

namespace Sunaoka\Aws\Structures\PinpointSMSVoiceV2\UpdateRcsAgent;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $RcsAgentArn
 * @property string $RcsAgentId
 * @property 'CREATED'|'PENDING'|'TESTING'|'PARTIAL'|'ACTIVE'|'DELETED' $Status
 * @property \Aws\Api\DateTimeResult $CreatedTimestamp
 * @property bool $DeletionProtectionEnabled
 * @property string|null $OptOutListName
 * @property bool $SelfManagedOptOutsEnabled
 * @property string|null $TwoWayChannelArn
 * @property string|null $TwoWayChannelRole
 * @property bool $TwoWayEnabled
 * @property string|null $TwoWayMediaS3BucketName
 * @property string|null $TwoWayMediaS3KeyPrefix
 * @property string|null $TwoWayMediaS3Role
 * @property list<string>|null $TwoWayRcsEventsEnabled
 */
class UpdateRcsAgentResponse extends Response
{
}
