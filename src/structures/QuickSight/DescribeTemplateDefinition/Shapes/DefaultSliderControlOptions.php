<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SliderControlDisplayOptions|null $DisplayOptions
 * @property 'SINGLE_POINT'|'RANGE'|null $Type
 * @property double $MaximumValue
 * @property double $MinimumValue
 * @property double $StepSize
 */
class DefaultSliderControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: SliderControlDisplayOptions|null,
     *     Type?: 'SINGLE_POINT'|'RANGE'|null,
     *     MaximumValue: double,
     *     MinimumValue: double,
     *     StepSize: double
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
