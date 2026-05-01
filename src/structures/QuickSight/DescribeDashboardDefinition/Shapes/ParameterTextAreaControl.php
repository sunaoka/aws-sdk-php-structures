<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDashboardDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string|null $Title
 * @property string $SourceParameterName
 * @property string|null $Delimiter
 * @property TextAreaControlDisplayOptions|null $DisplayOptions
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class ParameterTextAreaControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title?: string|null,
     *     SourceParameterName: string,
     *     Delimiter?: string|null,
     *     DisplayOptions?: TextAreaControlDisplayOptions|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
