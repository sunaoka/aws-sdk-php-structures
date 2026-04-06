<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $ImpairedSince
 * @property 'reachability'|null $Name
 * @property 'passed'|'failed'|'insufficient-data'|'initializing'|null $Status
 */
class EbsStatusDetails extends Shape
{
    /**
     * @param array{
     *     ImpairedSince?: \Aws\Api\DateTimeResult|null,
     *     Name?: 'reachability'|null,
     *     Status?: 'passed'|'failed'|'insufficient-data'|'initializing'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
