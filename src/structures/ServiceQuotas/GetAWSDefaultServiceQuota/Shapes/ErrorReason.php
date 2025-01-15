<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\GetAWSDefaultServiceQuota\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPENDENCY_ACCESS_DENIED_ERROR'|'DEPENDENCY_THROTTLING_ERROR'|'DEPENDENCY_SERVICE_ERROR'|'SERVICE_QUOTA_NOT_AVAILABLE_ERROR'|null $ErrorCode
 * @property string|null $ErrorMessage
 */
class ErrorReason extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'DEPENDENCY_ACCESS_DENIED_ERROR'|'DEPENDENCY_THROTTLING_ERROR'|'DEPENDENCY_SERVICE_ERROR'|'SERVICE_QUOTA_NOT_AVAILABLE_ERROR'|null,
     *     ErrorMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
