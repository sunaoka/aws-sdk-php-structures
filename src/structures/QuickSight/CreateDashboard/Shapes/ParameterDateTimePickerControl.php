<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string|null $Title
 * @property string $SourceParameterName
 * @property DateTimePickerControlDisplayOptions|null $DisplayOptions
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class ParameterDateTimePickerControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title?: string|null,
     *     SourceParameterName: string,
     *     DisplayOptions?: DateTimePickerControlDisplayOptions|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
