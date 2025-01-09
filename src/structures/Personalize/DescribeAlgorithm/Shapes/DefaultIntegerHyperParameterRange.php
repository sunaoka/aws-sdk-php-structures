<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int<-1000000, max> $minValue
 * @property int<min, 1000000> $maxValue
 * @property bool $isTunable
 */
class DefaultIntegerHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     minValue?: int<-1000000, max>,
     *     maxValue?: int<min, 1000000>,
     *     isTunable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
