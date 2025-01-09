<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'SUCCESS'|'ERROR' $Status
 * @property string $ErrorCode
 * @property string $ErrorDetail
 */
class ReportResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING'|'SUCCESS'|'ERROR',
     *     ErrorCode?: string,
     *     ErrorDetail?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
