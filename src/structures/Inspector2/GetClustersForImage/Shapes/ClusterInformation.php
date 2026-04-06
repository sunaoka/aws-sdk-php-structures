<?php

namespace Sunaoka\Aws\Structures\Inspector2\GetClustersForImage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $clusterArn
 * @property list<ClusterDetails>|null $clusterDetails
 */
class ClusterInformation extends Shape
{
    /**
     * @param array{
     *     clusterArn: string,
     *     clusterDetails?: list<ClusterDetails>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
