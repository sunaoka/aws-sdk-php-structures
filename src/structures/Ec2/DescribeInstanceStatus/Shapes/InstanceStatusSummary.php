<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InstanceStatusDetails> $Details
 * @property 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing' $Status
 */
class InstanceStatusSummary extends Shape
{
    /**
     * @param array{
     *     Details?: list<InstanceStatusDetails>,
     *     Status?: 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
