<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeClusterNode\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $CurrentLabels
 * @property array<string, string>|null $DesiredLabels
 * @property list<ClusterKubernetesTaint>|null $CurrentTaints
 * @property list<ClusterKubernetesTaint>|null $DesiredTaints
 */
class ClusterKubernetesConfigNodeDetails extends Shape
{
    /**
     * @param array{
     *     CurrentLabels?: array<string, string>|null,
     *     DesiredLabels?: array<string, string>|null,
     *     CurrentTaints?: list<ClusterKubernetesTaint>|null,
     *     DesiredTaints?: list<ClusterKubernetesTaint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
