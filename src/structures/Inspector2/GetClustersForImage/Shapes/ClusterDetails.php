<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ClusterMetadata $clusterMetadata
 * @property \Aws\Api\DateTimeResult $lastInUse
 * @property int|null $runningUnitCount
 * @property int|null $stoppedUnitCount
 */
class ClusterDetails extends Shape
{
    /**
     * @param array{
     *     clusterMetadata: ClusterMetadata,
     *     lastInUse: \Aws\Api\DateTimeResult,
     *     runningUnitCount?: int|null,
     *     stoppedUnitCount?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
