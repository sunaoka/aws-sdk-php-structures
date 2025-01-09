<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property DateTimePickerControlDisplayOptions $DisplayOptions
 * @property 'SINGLE_VALUED'|'DATE_RANGE' $Type
 * @property 'AUTO'|'MANUAL' $CommitMode
 */
class FilterDateTimePickerControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: DateTimePickerControlDisplayOptions,
     *     Type?: 'SINGLE_VALUED'|'DATE_RANGE',
     *     CommitMode?: 'AUTO'|'MANUAL'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
