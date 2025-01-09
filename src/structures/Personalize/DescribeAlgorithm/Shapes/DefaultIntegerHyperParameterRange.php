<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property int $minValue
 * @property int $maxValue
 * @property bool $isTunable
 */
class DefaultIntegerHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     minValue?: int,
     *     maxValue?: int,
     *     isTunable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
