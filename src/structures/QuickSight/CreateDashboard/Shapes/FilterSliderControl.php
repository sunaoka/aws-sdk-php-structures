<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string|null $Title
 * @property string $SourceFilterId
 * @property SliderControlDisplayOptions|null $DisplayOptions
 * @property 'SINGLE_POINT'|'RANGE'|null $Type
 * @property double $MaximumValue
 * @property double $MinimumValue
 * @property double $StepSize
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class FilterSliderControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title?: string|null,
     *     SourceFilterId: string,
     *     DisplayOptions?: SliderControlDisplayOptions|null,
     *     Type?: 'SINGLE_POINT'|'RANGE'|null,
     *     MaximumValue: double,
     *     MinimumValue: double,
     *     StepSize: double,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
