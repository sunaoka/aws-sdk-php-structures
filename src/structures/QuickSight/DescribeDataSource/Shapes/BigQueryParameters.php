<?php

namespace Sunaoka\Aws\Structures\QuickSight\DescribeDataSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ProjectId
 * @property string|null $DataSetRegion
 */
class BigQueryParameters extends Shape
{
    /**
     * @param array{
     *     ProjectId: string,
     *     DataSetRegion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
