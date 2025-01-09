<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property double $minValue
 * @property double $maxValue
 * @property bool $isTunable
 */
class DefaultContinuousHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     minValue?: double,
     *     maxValue?: double,
     *     isTunable?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
