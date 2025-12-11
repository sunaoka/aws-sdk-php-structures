<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceColumnName
 * @property string $OutputColumnName
 */
class OutputColumnNameOverride extends Shape
{
    /**
     * @param array{
     *     SourceColumnName?: string|null,
     *     OutputColumnName: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
