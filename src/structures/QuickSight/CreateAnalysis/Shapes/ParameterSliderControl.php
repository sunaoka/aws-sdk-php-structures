<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string|null $Title
 * @property string $SourceParameterName
 * @property SliderControlDisplayOptions|null $DisplayOptions
 * @property double $MaximumValue
 * @property double $MinimumValue
 * @property double $StepSize
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class ParameterSliderControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title?: string|null,
     *     SourceParameterName: string,
     *     DisplayOptions?: SliderControlDisplayOptions|null,
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
