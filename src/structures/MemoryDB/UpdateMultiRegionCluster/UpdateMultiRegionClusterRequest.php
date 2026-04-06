<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateMultiRegionCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionClusterName
 * @property string|null $NodeType
 * @property string|null $Description
 * @property string|null $EngineVersion
 * @property Shapes\ShardConfigurationRequest|null $ShardConfiguration
 * @property string|null $MultiRegionParameterGroupName
 * @property 'coordinated'|'uncoordinated'|null $UpdateStrategy
 */
class UpdateMultiRegionClusterRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionClusterName: string,
     *     NodeType?: string|null,
     *     Description?: string|null,
     *     EngineVersion?: string|null,
     *     ShardConfiguration?: Shapes\ShardConfigurationRequest|null,
     *     MultiRegionParameterGroupName?: string|null,
     *     UpdateStrategy?: 'coordinated'|'uncoordinated'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
