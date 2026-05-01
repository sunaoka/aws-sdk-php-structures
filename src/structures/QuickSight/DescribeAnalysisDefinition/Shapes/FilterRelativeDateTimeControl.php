<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string|null $Title
 * @property string $SourceFilterId
 * @property RelativeDateTimeControlDisplayOptions|null $DisplayOptions
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 * @property ControlTitleFormatText|null $ControlTitleFormatText
 */
class FilterRelativeDateTimeControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title?: string|null,
     *     SourceFilterId: string,
     *     DisplayOptions?: RelativeDateTimeControlDisplayOptions|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null,
     *     ControlTitleFormatText?: ControlTitleFormatText|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
