<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LogsConfiguration $S3Logs
 * @property KubernetesConfiguration $Kubernetes
 * @property MalwareProtectionConfiguration $MalwareProtection
 */
class DataSourceConfigurations extends Shape
{
    /**
     * @param array{
     *     S3Logs?: S3LogsConfiguration,
     *     Kubernetes?: KubernetesConfiguration,
     *     MalwareProtection?: MalwareProtectionConfiguration
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
