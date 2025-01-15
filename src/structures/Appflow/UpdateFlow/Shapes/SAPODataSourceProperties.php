<?php

namespace Sunaoka\Aws\Structures\Appflow\UpdateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $objectPath
 * @property SAPODataParallelismConfig|null $parallelismConfig
 * @property SAPODataPaginationConfig|null $paginationConfig
 */
class SAPODataSourceProperties extends Shape
{
    /**
     * @param array{
     *     objectPath?: string|null,
     *     parallelismConfig?: SAPODataParallelismConfig|null,
     *     paginationConfig?: SAPODataPaginationConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
