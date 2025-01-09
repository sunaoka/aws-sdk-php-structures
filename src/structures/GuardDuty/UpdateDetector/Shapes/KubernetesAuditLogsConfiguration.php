<?php

namespace Sunaoka\Aws\Structures\GuardDuty\UpdateDetector\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Enable
 */
class KubernetesAuditLogsConfiguration extends Shape
{
    /**
     * @param array{Enable: bool} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
