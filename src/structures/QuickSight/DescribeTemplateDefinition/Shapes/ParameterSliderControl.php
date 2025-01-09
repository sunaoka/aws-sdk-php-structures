<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string $Title
 * @property string $SourceParameterName
 * @property SliderControlDisplayOptions $DisplayOptions
 * @property double $MaximumValue
 * @property double $MinimumValue
 * @property double $StepSize
 */
class ParameterSliderControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title: string,
     *     SourceParameterName: string,
     *     DisplayOptions?: SliderControlDisplayOptions,
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
