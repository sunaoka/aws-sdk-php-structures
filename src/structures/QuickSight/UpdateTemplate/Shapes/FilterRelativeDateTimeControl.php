<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property RelativeDateTimeControlDisplayOptions $DisplayOptions
 * @property 'AUTO'|'MANUAL' $CommitMode
 */
class FilterRelativeDateTimeControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: RelativeDateTimeControlDisplayOptions,
     *     CommitMode?: 'AUTO'|'MANUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
