<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateAnalysis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property RelativeDateTimeControlDisplayOptions|null $DisplayOptions
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 */
class FilterRelativeDateTimeControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: RelativeDateTimeControlDisplayOptions|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
