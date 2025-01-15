<?php

namespace Sunaoka\Aws\Structures\MemoryDB\CreateMultiRegionCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MultiRegionClusterNameSuffix
 * @property string|null $Description
 * @property string|null $Engine
 * @property string|null $EngineVersion
 * @property string $NodeType
 * @property string|null $MultiRegionParameterGroupName
 * @property int|null $NumShards
 * @property bool|null $TLSEnabled
 * @property list<Shapes\Tag>|null $Tags
 */
class CreateMultiRegionClusterRequest extends Request
{
    /**
     * @param array{
     *     MultiRegionClusterNameSuffix: string,
     *     Description?: string|null,
     *     Engine?: string|null,
     *     EngineVersion?: string|null,
     *     NodeType: string,
     *     MultiRegionParameterGroupName?: string|null,
     *     NumShards?: int|null,
     *     TLSEnabled?: bool|null,
     *     Tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
