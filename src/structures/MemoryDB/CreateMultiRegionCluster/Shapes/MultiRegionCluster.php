<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateMultiRegionCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $MultiRegionClusterName
 * @property string|null $Description
 * @property string|null $Status
 * @property string|null $NodeType
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property int|null $NumberOfShards
 * @property list<RegionalCluster>|null $Clusters
 * @property string|null $MultiRegionParameterGroupName
 * @property bool|null $TLSEnabled
 * @property string|null $ARN
 */
class MultiRegionCluster extends Shape
{
    /**
     * @param array{
     *     MultiRegionClusterName?: string|null,
     *     Description?: string|null,
     *     Status?: string|null,
     *     NodeType?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     NumberOfShards?: int|null,
     *     Clusters?: list<RegionalCluster>|null,
     *     MultiRegionParameterGroupName?: string|null,
     *     TLSEnabled?: bool|null,
     *     ARN?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
