<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing'|null $Status
 * @property \Aws\Api\DateTimeResult|null $ImpairedSince
 */
class ApplicationStatusSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing'|null,
     *     ImpairedSince?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
