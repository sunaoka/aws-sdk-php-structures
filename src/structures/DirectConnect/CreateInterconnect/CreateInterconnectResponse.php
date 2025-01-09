<?php

namespace Sunaoka\Aws\Structures\DirectConnect\CreateInterconnect;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $interconnectId
 * @property string $interconnectName
 * @property 'requested'|'pending'|'available'|'down'|'deleting'|'deleted'|'unknown' $interconnectState
 * @property string $region
 * @property string $location
 * @property string $bandwidth
 * @property \Aws\Api\DateTimeResult $loaIssueTime
 * @property string $lagId
 * @property string $awsDevice
 * @property bool $jumboFrameCapable
 * @property string $awsDeviceV2
 * @property string $awsLogicalDeviceId
 * @property 'unknown'|'yes'|'no' $hasLogicalRedundancy
 * @property list<Shapes\Tag> $tags
 * @property string $providerName
 */
class CreateInterconnectResponse extends Response
{
}
