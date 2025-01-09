<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $ImpairedSince
 * @property 'reachability' $Name
 * @property 'passed'|'failed'|'insufficient-data'|'initializing' $Status
 */
class EbsStatusDetails extends Shape
{
    /**
     * @param array{
     *     ImpairedSince?: \Aws\Api\DateTimeResult,
     *     Name?: 'reachability',
     *     Status?: 'passed'|'failed'|'insufficient-data'|'initializing'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
