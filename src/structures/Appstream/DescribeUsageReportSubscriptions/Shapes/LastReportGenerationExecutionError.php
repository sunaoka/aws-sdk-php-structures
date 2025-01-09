<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsageReportSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR' $ErrorCode
 * @property string $ErrorMessage
 */
class LastReportGenerationExecutionError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
