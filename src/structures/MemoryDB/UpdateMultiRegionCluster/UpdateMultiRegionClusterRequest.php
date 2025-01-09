<?php

namespace Sunaoka\Aws\Structures\MemoryDB\UpdateMultiRegionCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionClusterName
 * @property string $NodeType
 * @property string $Description
 * @property string $EngineVersion
 * @property Shapes\ShardConfigurationRequest $ShardConfiguration
 * @property string $MultiRegionParameterGroupName
 * @property 'coordinated'|'uncoordinated' $UpdateStrategy
 */
class UpdateMultiRegionClusterRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionClusterName: string,
     *     NodeType?: string,
     *     Description?: string,
     *     EngineVersion?: string,
     *     ShardConfiguration?: Shapes\ShardConfigurationRequest,
     *     MultiRegionParameterGroupName?: string,
     *     UpdateStrategy?: 'coordinated'|'uncoordinated'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
