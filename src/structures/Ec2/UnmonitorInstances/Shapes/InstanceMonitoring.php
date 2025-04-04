<?php

namespace Sunaoka\Aws\Structures\Ec2\UnmonitorInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $InstanceId
 * @property Monitoring|null $Monitoring
 */
class InstanceMonitoring extends Shape
{
    /**
     * @param array{
     *     InstanceId?: string|null,
     *     Monitoring?: Monitoring|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
