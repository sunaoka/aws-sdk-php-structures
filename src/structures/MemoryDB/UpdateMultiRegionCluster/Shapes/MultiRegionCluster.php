<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateMultiRegionCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $MultiRegionClusterName
 * @property string $Description
 * @property string $Status
 * @property string $NodeType
 * @property string $Engine
 * @property string $EngineVersion
 * @property int $NumberOfShards
 * @property list<RegionalCluster> $Clusters
 * @property string $MultiRegionParameterGroupName
 * @property bool $TLSEnabled
 * @property string $ARN
 */
class MultiRegionCluster extends Shape
{
    /**
     * @param array{
     *     MultiRegionClusterName?: string,
     *     Description?: string,
     *     Status?: string,
     *     NodeType?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     NumberOfShards?: int,
     *     Clusters?: list<RegionalCluster>,
     *     MultiRegionParameterGroupName?: string,
     *     TLSEnabled?: bool,
     *     ARN?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
