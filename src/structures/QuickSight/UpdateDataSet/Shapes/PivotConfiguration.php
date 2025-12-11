<?php

namespace Sunaoka\Aws\Structures\QuickSight\UpdateDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $LabelColumnName
 * @property list<PivotedLabel> $PivotedLabels
 */
class PivotConfiguration extends Shape
{
    /**
     * @param array{
     *     LabelColumnName?: string|null,
     *     PivotedLabels: list<PivotedLabel>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
