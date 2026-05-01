<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ParameterControlId
 * @property string|null $Title
 * @property string $SourceParameterName
 * @property TextFieldControlDisplayOptions|null $DisplayOptions
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class ParameterTextFieldControl extends Shape
{
    /**
     * @param array{
     *     ParameterControlId: string,
     *     Title?: string|null,
     *     SourceParameterName: string,
     *     DisplayOptions?: TextFieldControlDisplayOptions|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
