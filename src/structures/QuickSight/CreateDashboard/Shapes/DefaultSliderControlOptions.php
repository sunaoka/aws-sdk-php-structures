<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property SliderControlDisplayOptions $DisplayOptions
 * @property 'SINGLE_POINT'|'RANGE' $Type
 * @property double $MaximumValue
 * @property double $MinimumValue
 * @property double $StepSize
 */
class DefaultSliderControlOptions extends Shape
{
    /**
     * @param array{
     *     DisplayOptions?: SliderControlDisplayOptions,
     *     Type?: 'SINGLE_POINT'|'RANGE',
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
