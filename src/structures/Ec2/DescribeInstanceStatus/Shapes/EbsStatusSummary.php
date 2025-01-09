<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<EbsStatusDetails> $Details
 * @property 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing' $Status
 */
class EbsStatusSummary extends Shape
{
    /**
     * @param array{
     *     Details?: list<EbsStatusDetails>,
     *     Status?: 'ok'|'impaired'|'insufficient-data'|'not-applicable'|'initializing'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
