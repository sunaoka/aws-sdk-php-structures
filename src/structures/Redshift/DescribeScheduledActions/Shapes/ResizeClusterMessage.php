<?php

namespace Sunaoka\Aws\Structures\Redshift\DescribeScheduledActions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 * @property string $ClusterType
 * @property string $NodeType
 * @property int $NumberOfNodes
 * @property bool $Classic
 * @property string $ReservedNodeId
 * @property string $TargetReservedNodeOfferingId
 */
class ResizeClusterMessage extends Shape
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
