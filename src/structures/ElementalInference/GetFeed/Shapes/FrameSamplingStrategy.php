<?php

namespace Sunaoka\Aws\Structures\ElementalInference\GetFeed\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FIRST'|'UNIFORM'|'LAST' $mode
 * @property int<1, 64>|null $count
 */
class FrameSamplingStrategy extends Shape
{
    /**
     * @param array{
     *     mode: 'FIRST'|'UNIFORM'|'LAST',
     *     count?: int<1, 64>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
