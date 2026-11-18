<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MergeOperation|null $merge
 * @property SplitOperation|null $split
 * @property DeleteOperation|null $delete
 * @property UpdateOperation|null $update
 * @property UpdateOperationV2|null $updateV2
 * @property CreateOperation|null $create
 */
class OperationUnion extends Shape
{
    /**
     * @param array{
     *     merge?: MergeOperation|null,
     *     split?: SplitOperation|null,
     *     delete?: DeleteOperation|null,
     *     update?: UpdateOperation|null,
     *     updateV2?: UpdateOperationV2|null,
     *     create?: CreateOperation|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
