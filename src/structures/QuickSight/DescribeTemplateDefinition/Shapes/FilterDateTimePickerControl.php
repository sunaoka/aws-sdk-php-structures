<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeTemplateDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string|null $Title
 * @property string $SourceFilterId
 * @property DateTimePickerControlDisplayOptions|null $DisplayOptions
 * @property 'SINGLE_VALUED'|'DATE_RANGE'|null $Type
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class FilterDateTimePickerControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title?: string|null,
     *     SourceFilterId: string,
     *     DisplayOptions?: DateTimePickerControlDisplayOptions|null,
     *     Type?: 'SINGLE_VALUED'|'DATE_RANGE'|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
