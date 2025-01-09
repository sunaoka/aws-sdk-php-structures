<?php

namespace Sunaoka\Aws\Structures\Emr\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property string $Name
 * @property ClusterStatus $Status
 * @property int $NormalizedInstanceHours
 * @property string $ClusterArn
 * @property string $OutpostArn
 */
class ClusterSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string,
     *     Name?: string,
     *     Status?: ClusterStatus,
     *     NormalizedInstanceHours?: int,
     *     ClusterArn?: string,
     *     OutpostArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
