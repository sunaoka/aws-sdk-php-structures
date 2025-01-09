<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateMultiRegionCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionClusterNameSuffix
 * @property string $Description
 * @property string $Engine
 * @property string $EngineVersion
 * @property string $NodeType
 * @property string $MultiRegionParameterGroupName
 * @property int $NumShards
 * @property bool $TLSEnabled
 * @property list<Shapes\Tag> $Tags
 */
class CreateMultiRegionClusterRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionClusterNameSuffix: string,
     *     Description?: string,
     *     Engine?: string,
     *     EngineVersion?: string,
     *     NodeType: string,
     *     MultiRegionParameterGroupName?: string,
     *     NumShards?: int,
     *     TLSEnabled?: bool,
     *     Tags?: list<Shapes\Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
