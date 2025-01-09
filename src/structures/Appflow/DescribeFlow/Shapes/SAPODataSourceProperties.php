<?php

namespace Sunaoka\Aws\Structures\Appflow\DescribeFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $objectPath
 * @property SAPODataParallelismConfig $parallelismConfig
 * @property SAPODataPaginationConfig $paginationConfig
 */
class SAPODataSourceProperties extends Shape
{
    /**
     * @param array{
     *     objectPath?: string,
     *     parallelismConfig?: SAPODataParallelismConfig,
     *     paginationConfig?: SAPODataPaginationConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
