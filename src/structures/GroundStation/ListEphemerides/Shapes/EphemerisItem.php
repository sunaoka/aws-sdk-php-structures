<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $creationTime
 * @property bool|null $enabled
 * @property string|null $ephemerisId
 * @property string|null $name
 * @property int<0, 99999>|null $priority
 * @property S3Object|null $sourceS3Object
 * @property 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'|null $status
 */
class EphemerisItem extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult|null,
     *     enabled?: bool|null,
     *     ephemerisId?: string|null,
     *     name?: string|null,
     *     priority?: int<0, 99999>|null,
     *     sourceS3Object?: S3Object|null,
     *     status?: 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
