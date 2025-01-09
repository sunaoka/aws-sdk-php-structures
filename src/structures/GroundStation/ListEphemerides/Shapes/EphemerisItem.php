<?php

namespace Sunaoka\Aws\Structures\GroundStation\ListEphemerides\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $creationTime
 * @property bool $enabled
 * @property string $ephemerisId
 * @property string $name
 * @property int $priority
 * @property S3Object $sourceS3Object
 * @property 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED' $status
 */
class EphemerisItem extends Shape
{
    /**
     * @param array{
     *     creationTime?: \Aws\Api\DateTimeResult,
     *     enabled?: bool,
     *     ephemerisId?: string,
     *     name?: string,
     *     priority?: int,
     *     sourceS3Object?: S3Object,
     *     status?: 'VALIDATING'|'INVALID'|'ERROR'|'ENABLED'|'DISABLED'|'EXPIRED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
