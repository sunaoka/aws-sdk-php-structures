<?php

namespace Sunaoka\Aws\Structures\Personalize\DescribeAlgorithm\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $name
 * @property double|null $minValue
 * @property double|null $maxValue
 * @property bool|null $isTunable
 */
class DefaultContinuousHyperParameterRange extends Shape
{
    /**
     * @param array{
     *     name?: string|null,
     *     minValue?: double|null,
     *     maxValue?: double|null,
     *     isTunable?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
