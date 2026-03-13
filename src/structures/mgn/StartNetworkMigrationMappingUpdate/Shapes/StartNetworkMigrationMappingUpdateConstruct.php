<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $segmentID
 * @property string $constructID
 * @property string $constructType
 * @property OperationUnion|null $operation
 */
class StartNetworkMigrationMappingUpdateConstruct extends Shape
{
    /**
     * @param array{
     *     segmentID: string,
     *     constructID: string,
     *     constructType: string,
     *     operation?: OperationUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
