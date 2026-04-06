<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeAnalysisDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SINGLE_VALUED'|'DATE_RANGE'|null $Type
 * @property DateTimePickerControlDisplayOptions|null $DisplayOptions
 * @property 'AUTO'|'MANUAL'|null $CommitMode
 */
class DefaultDateTimePickerControlOptions extends Shape
{
    /**
     * @param array{
     *     Type?: 'SINGLE_VALUED'|'DATE_RANGE'|null,
     *     DisplayOptions?: DateTimePickerControlDisplayOptions|null,
     *     CommitMode?: 'AUTO'|'MANUAL'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
