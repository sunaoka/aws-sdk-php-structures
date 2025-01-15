<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property SliderControlDisplayOptions|null $DisplayOptions
 * @property 'SINGLE_POINT'|'RANGE'|null $Type
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
