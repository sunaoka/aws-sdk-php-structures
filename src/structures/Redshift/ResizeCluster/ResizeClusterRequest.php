<?php

namespace Sunaoka\Aws\Structures\Redshift\ResizeCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string|null $ClusterType
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property bool|null $Classic
 * @property string|null $ReservedNodeId
 * @property string|null $TargetReservedNodeOfferingId
 */
class ResizeClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     ClusterType?: string|null,
     *     NodeType?: string|null,
     *     NumberOfNodes?: int|null,
     *     Classic?: bool|null,
     *     ReservedNodeId?: string|null,
     *     TargetReservedNodeOfferingId?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
