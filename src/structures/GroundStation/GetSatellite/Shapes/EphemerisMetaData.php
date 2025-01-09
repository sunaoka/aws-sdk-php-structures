<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetSatellite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ephemerisId
 * @property \Aws\Api\DateTimeResult $epoch
 * @property string $name
 * @property 'CUSTOMER_PROVIDED'|'SPACE_TRACK' $source
 */
class EphemerisMetaData extends Shape
{
    /**
     * @param array{
     *     ephemerisId?: string,
     *     epoch?: \Aws\Api\DateTimeResult,
     *     name?: string,
     *     source: 'CUSTOMER_PROVIDED'|'SPACE_TRACK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
