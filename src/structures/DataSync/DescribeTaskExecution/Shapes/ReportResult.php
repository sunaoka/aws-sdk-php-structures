<?php

namespace Sunaoka\Aws\Structures\DataSync\DescribeTaskExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PENDING'|'SUCCESS'|'ERROR'|null $Status
 * @property string|null $ErrorCode
 * @property string|null $ErrorDetail
 */
class ReportResult extends Shape
{
    /**
     * @param array{
     *     Status?: 'PENDING'|'SUCCESS'|'ERROR'|null,
     *     ErrorCode?: string|null,
     *     ErrorDetail?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
