<?php

namespace Sunaoka\Aws\Structures\GroundStation\DescribeEphemeris;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $ephemerisId
 * @property string|null $satelliteId
 * @property 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'|null $status
 * @property int<0, 99999>|null $priority
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property bool|null $enabled
 * @property string|null $name
 * @property array<string, string>|null $tags
 * @property Shapes\EphemerisTypeDescription|null $suppliedData
 * @property 'METADATA_INVALID'|'TIME_RANGE_INVALID'|'TRAJECTORY_INVALID'|'KMS_KEY_INVALID'|'VALIDATION_ERROR'|null $invalidReason
 * @property list<Shapes\EphemerisErrorReason>|null $errorReasons
 */
class DescribeEphemerisResponse extends Response
{
}
