<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InstanceStatusDetails>|null $Details
 * @property 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing'|null $Status
 */
class InstanceStatusSummary extends Shape
{
    /**
     * @param array{
     *     Details?: list<InstanceStatusDetails>|null,
     *     Status?: 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
