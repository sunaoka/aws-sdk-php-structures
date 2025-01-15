<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property bool|null $enabled
 * @property string|null $ephemerisId
 * @property 'METADATA_INVALID'|'TIME_RANGE_INVALID'|'TRAJECTORY_INVALID'|'KMS_KEY_INVALID'|'VALIDATION_ERROR'|null $invalidReason
 * @property string|null $name
 * @property int<0, 99999>|null $priority
 * @property string|null $satelliteId
 * @property 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'|null $status
 * @property Shapes\EphemerisTypeDescription|null $suppliedData
 * @property array<string, string>|null $tags
 */
class DescribeEphemerisResponse extends Response
{
}
