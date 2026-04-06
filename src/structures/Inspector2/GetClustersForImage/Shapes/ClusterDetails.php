<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $lastInUse
 * @property int|null $runningUnitCount
 * @property int|null $stoppedUnitCount
 * @property ClusterMetadata $clusterMetadata
 */
class ClusterDetails extends Shape
{
    /**
     * @param array{
     *     lastInUse: \Aws\Api\DateTimeResult,
     *     runningUnitCount?: int|null,
     *     stoppedUnitCount?: int|null,
     *     clusterMetadata: ClusterMetadata
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
