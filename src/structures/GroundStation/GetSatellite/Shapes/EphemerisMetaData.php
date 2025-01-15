<?php

namespace Sunaoka\Aws\Structures\GroundStation\GetSatellite\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ephemerisId
 * @property \Aws\Api\DateTimeResult|null $epoch
 * @property string|null $name
 * @property 'CUSTOMER_PROVIDED'|'SPACE_TRACK' $source
 */
class EphemerisMetaData extends Shape
{
    /**
     * @param array{
     *     ephemerisId?: string|null,
     *     epoch?: \Aws\Api\DateTimeResult|null,
     *     name?: string|null,
     *     source: 'CUSTOMER_PROVIDED'|'SPACE_TRACK'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
