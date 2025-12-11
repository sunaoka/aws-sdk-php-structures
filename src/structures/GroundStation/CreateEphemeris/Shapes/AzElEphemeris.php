<?php

namespace Sunaoka\Aws\Structures\GroundStation\CreateEphemeris\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groundStation
 * @property AzElSegmentsData $data
 */
class AzElEphemeris extends Shape
{
    /**
     * @param array{
     *     groundStation: string,
     *     data: AzElSegmentsData
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
