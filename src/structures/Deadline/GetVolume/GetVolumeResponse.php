<?php

namespace Sunaoka\Aws\Structures\Deadline\GetVolume;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $volumeId
 * @property string $farmId
 * @property string $fleetId
 * @property 'PENDING_CREATION'|'PENDING_ATTACHMENT'|'IN_USE'|'AVAILABLE'|'PENDING_DELETION' $state
 * @property int<1, 65536> $sizeGiB
 * @property string $availabilityZoneId
 * @property string|null $attachedWorkerId
 * @property 'gp3' $volumeType
 * @property int<100, 80000>|null $iops
 * @property int<125, 2000>|null $throughputMiB
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult|null $lastAssignedAt
 * @property \Aws\Api\DateTimeResult|null $lastReleasedAt
 * @property \Aws\Api\DateTimeResult|null $expiresAt
 */
class GetVolumeResponse extends Response
{
}
