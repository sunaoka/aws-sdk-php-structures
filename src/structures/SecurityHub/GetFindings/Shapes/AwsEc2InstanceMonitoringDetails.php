<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $State
 */
class AwsEc2InstanceMonitoringDetails extends Shape
{
    /**
     * @param array{State?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
