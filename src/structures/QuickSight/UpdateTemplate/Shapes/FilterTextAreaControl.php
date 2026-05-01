<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string|null $Title
 * @property string $SourceFilterId
 * @property string|null $Delimiter
 * @property TextAreaControlDisplayOptions|null $DisplayOptions
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class FilterTextAreaControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title?: string|null,
     *     SourceFilterId: string,
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
