<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KubernetesUserDetails|null $KubernetesUserDetails
 * @property KubernetesWorkloadDetails|null $KubernetesWorkloadDetails
 */
class KubernetesDetails extends Shape
{
    /**
     * @param array{
     *     KubernetesUserDetails?: KubernetesUserDetails|null,
     *     KubernetesWorkloadDetails?: KubernetesWorkloadDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
