<?php

namespace Sunaoka\Aws\Structures\EKS\DescribeInsight\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSING'|'WARNING'|'ERROR'|'UNKNOWN' $status
 * @property string $reason
 */
class InsightStatus extends Shape
{
    /**
     * @param array{
     *     status?: 'PASSING'|'WARNING'|'ERROR'|'UNKNOWN',
     *     reason?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
