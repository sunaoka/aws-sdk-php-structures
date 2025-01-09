<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGLE_VALUED'|'DATE_RANGE' $Type
 * @property DateTimePickerControlDisplayOptions $DisplayOptions
 * @property 'AUTO'|'MANUAL' $CommitMode
 */
class DefaultDateTimePickerControlOptions extends Shape
{
    /**
     * @param array{
     *     Type?: 'SINGLE_VALUED'|'DATE_RANGE',
     *     DisplayOptions?: DateTimePickerControlDisplayOptions,
     *     CommitMode?: 'AUTO'|'MANUAL'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
