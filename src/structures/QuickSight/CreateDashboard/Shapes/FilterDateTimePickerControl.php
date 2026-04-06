<?php

namespace Sunaoka\Aws\Structures\QuickSight\CreateDashboard\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FilterControlId
 * @property string $Title
 * @property string $SourceFilterId
 * @property DateTimePickerControlDisplayOptions|null $DisplayOptions
 * @property 'SINGLE_VALUED'|'DATE_RANGE'|null $Type
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 */
class FilterDateTimePickerControl extends Shape
{
    /**
     * @param array{
     *     FilterControlId: string,
     *     Title: string,
     *     SourceFilterId: string,
     *     DisplayOptions?: DateTimePickerControlDisplayOptions|null,
     *     Type?: 'SINGLE_VALUED'|'DATE_RANGE'|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
