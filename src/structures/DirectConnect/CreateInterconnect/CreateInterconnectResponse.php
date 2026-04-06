<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateInterconnect;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $interconnectId
 * @property string|null $interconnectName
 * @property 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown'|null $interconnectState
 * @property string|null $region
 * @property string|null $location
 * @property string|null $bandwidth
 * @property \Aws\Api\DateTimeResult|null $loaIssueTime
 * @property string|null $lagId
 * @property string|null $awsDevice
 * @property bool|null $jumboFrameCapable
 * @property string|null $awsDeviceV2
 * @property string|null $awsLogicalDeviceId
 * @property 'unknown'|'yes'|'no'|null $hasLogicalRedundancy
 * @property list<Shapes\Tag>|null $tags
 * @property string|null $providerName
 */
class CreateInterconnectResponse extends Response
{
}
