<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ephemerisId
 * @property 'TLE'|'OEM'|'AZ_EL'|'SERVICE_MANAGED'|null $ephemerisType
 * @property 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'|null $status
 * @property int<0, 99999>|null $priority
 * @property bool|null $enabled
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property string|null $name
 * @property S3Object|null $sourceS3Object
 */
class EphemerisItem extends Shape
{
    /**
     * @param array{
     *     ephemerisId?: string|null,
     *     ephemerisType?: 'TLE'|'OEM'|'AZ_EL'|'SERVICE_MANAGED'|null,
     *     status?: 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'|null,
     *     priority?: int<0, 99999>|null,
     *     enabled?: bool|null,
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     sourceS3Object?: S3Object|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
