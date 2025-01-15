<?php

namespace Sunaoka\Aws\Structures\Emr\ListClusters\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Id
 * @property string|null $Name
 * @property ClusterStatus|null $Status
 * @property int|null $NormalizedInstanceHours
 * @property string|null $ClusterArn
 * @property string|null $OutpostArn
 */
class ClusterSummary extends Shape
{
    /**
     * @param array{
     *     Id?: string|null,
     *     Name?: string|null,
     *     Status?: ClusterStatus|null,
     *     NormalizedInstanceHours?: int|null,
     *     ClusterArn?: string|null,
     *     OutpostArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
