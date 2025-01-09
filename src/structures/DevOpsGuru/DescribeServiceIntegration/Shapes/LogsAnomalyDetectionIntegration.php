<?php

namespace Sunaoka\Aws\Structures\DevOpsGuru\DescribeServiceIntegration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $OptInStatus
 */
class LogsAnomalyDetectionIntegration extends Shape
{
    /**
     * @param array{OptInStatus?: 'ENABLED'|'DISABLED'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
