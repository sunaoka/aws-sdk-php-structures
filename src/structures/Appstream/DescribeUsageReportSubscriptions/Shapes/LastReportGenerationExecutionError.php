<?php

namespace Sunaoka\Aws\Structures\Appstream\DescribeUsageReportSubscriptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class LastReportGenerationExecutionError extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'RESOURCE_NOT_FOUND'|'ACCESS_DENIED'|'INTERNAL_SERVICE_ERROR'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
