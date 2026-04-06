<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $Labels
 * @property list<ClusterKubernetesTaint>|null $Taints
 */
class ClusterKubernetesConfig extends Shape
{
    /**
     * @param array{
     *     Labels?: array<string, string>|null,
     *     Taints?: list<ClusterKubernetesTaint>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
