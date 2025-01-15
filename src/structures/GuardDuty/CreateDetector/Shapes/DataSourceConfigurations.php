<?php

namespace Sunaoka\Aws\Structures\GuardDuty\CreateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property S3LogsConfiguration|null $S3Logs
 * @property KubernetesConfiguration|null $Kubernetes
 * @property MalwareProtectionConfiguration|null $MalwareProtection
 */
class DataSourceConfigurations extends Shape
{
    /**
     * @param array{
     *     S3Logs?: S3LogsConfiguration|null,
     *     Kubernetes?: KubernetesConfiguration|null,
     *     MalwareProtection?: MalwareProtectionConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
