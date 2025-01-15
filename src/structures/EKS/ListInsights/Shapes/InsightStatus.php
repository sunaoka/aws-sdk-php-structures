<?php

namespace Sunaoka\Aws\Structures\EKS\ListInsights\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PASSING'|'WARNING'|'ERROR'|'UNKNOWN'|null $status
 * @property string|null $reason
 */
class InsightStatus extends Shape
{
    /**
     * @param array{
     *     status?: 'PASSING'|'WARNING'|'ERROR'|'UNKNOWN'|null,
     *     reason?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
