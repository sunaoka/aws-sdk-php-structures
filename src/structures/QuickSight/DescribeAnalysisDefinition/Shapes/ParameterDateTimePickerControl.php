<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string $Title
 * @property string $SourceParameterName
 * @property DateTimePickerControlDisplayOptions $DisplayOptions
 */
class ParameterDateTimePickerControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title: string,
     *     SourceParameterName: string,
     *     DisplayOptions?: DateTimePickerControlDisplayOptions
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
