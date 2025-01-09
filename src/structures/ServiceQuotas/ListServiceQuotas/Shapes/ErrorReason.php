<?php

namespace Sunaoka\Aws\Structures\ServiceQuotas\ListServiceQuotas\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DEPENDENCY_ACCESS_DENIED_ERROR'|'DEPENDENCY_THROTTLING_ERROR'|'DEPENDENCY_SERVICE_ERROR'|'SERVICE_QUOTA_NOT_AVAILABLE_ERROR' $ErrorCode
 * @property string $ErrorMessage
 */
class ErrorReason extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: 'DEPENDENCY_ACCESS_DENIED_ERROR'|'DEPENDENCY_THROTTLING_ERROR'|'DEPENDENCY_SERVICE_ERROR'|'SERVICE_QUOTA_NOT_AVAILABLE_ERROR',
     *     ErrorMessage?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
