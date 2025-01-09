<?php

namespace Sunaoka\Aws\Structures\Redshift\ResizeCluster;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClusterIdentifier
 * @property string $ClusterType
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property bool $Classic
 * @property string $ReservedNodeId
 * @property string $TargetReservedNodeOfferingId
 */
class ResizeClusterRequest extends Request
{
    /**
     * @param array{
     *     ClusterIdentifier: string,
     *     ClusterType?: string,
     *     NodeType?: string,
     *     NumberOfNodes?: int,
     *     Classic?: bool,
     *     ReservedNodeId?: string,
     *     TargetReservedNodeOfferingId?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
