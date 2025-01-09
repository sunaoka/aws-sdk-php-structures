<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property SliderControlDisplayOptions $DisplayOptions
 * @property 'SINGLE_POINT'|'RANGE' $Type
 * @property double $MaximumValue
 * @property double $MinimumValue
 * @property double $StepSize
 */
class FilterSliderControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
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
