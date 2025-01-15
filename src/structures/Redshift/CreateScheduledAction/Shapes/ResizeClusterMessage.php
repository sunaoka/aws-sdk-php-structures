<?php

namespace Sunaoka\Aws\Structures\Redshift\CreateScheduledAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ClusterIdentifier
 * @property string|null $ClusterType
 * @property string|null $NodeType
 * @property int|null $NumberOfNodes
 * @property bool|null $Classic
 * @property string|null $ReservedNodeId
 * @property string|null $TargetReservedNodeOfferingId
 */
class ResizeClusterMessage extends Shape
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
