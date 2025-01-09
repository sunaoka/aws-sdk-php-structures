<?php

namespace Sunaoka\Aws\Structures\Ec2\UnmonitorInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $InstanceId
 * @property Monitoring $Monitoring
 */
class InstanceMonitoring extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string,
     *     Monitoring?: Monitoring
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
