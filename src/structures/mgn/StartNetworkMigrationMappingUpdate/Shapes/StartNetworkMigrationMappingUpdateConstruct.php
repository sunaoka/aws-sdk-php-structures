<?php

namespace Sunaoka\Aws\Structures\mgn\StartNetworkMigrationMappingUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $segmentID
 * @property string|null $segmentLogicalID
 * @property string|null $constructID
 * @property string $constructType
 * @property string|null $constructLogicalID
 * @property OperationUnion|null $operation
 */
class StartNetworkMigrationMappingUpdateConstruct extends Shape
{
    /**
     * @param array{
     *     segmentID?: string|null,
     *     segmentLogicalID?: string|null,
     *     constructID?: string|null,
     *     constructType: string,
     *     constructLogicalID?: string|null,
     *     operation?: OperationUnion|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
