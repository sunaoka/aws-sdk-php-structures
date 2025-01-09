<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property KubernetesUserDetails $KubernetesUserDetails
 * @property KubernetesWorkloadDetails $KubernetesWorkloadDetails
 */
class KubernetesDetails extends Shape
{
    /**
     * @param array{
     *     KubernetesUserDetails?: KubernetesUserDetails,
     *     KubernetesWorkloadDetails?: KubernetesWorkloadDetails
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
