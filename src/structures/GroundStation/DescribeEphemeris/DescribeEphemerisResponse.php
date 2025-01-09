<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property bool $enabled
 * @property string $ephemerisId
 * @property 'METADATA_INVALID'|'TIME_RANGE_INVALID'|'TRAJECTORY_INVALID'|'KMS_KEY_INVALID'|'VALIDATION_ERROR' $invalidReason
 * @property string $name
 * @property int<0, 99999> $priority
 * @property string $satelliteId
 * @property 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED' $status
 * @property Shapes\EphemerisTypeDescription $suppliedData
 * @property array<string, string> $tags
 */
class DescribeEphemerisResponse extends Response
{
}
