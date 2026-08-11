<?php

namespace Sunaoka\Aws\Structures\AccountAccess\GetApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHORIZATION_ERROR'|'RESOURCE_NOT_FOUND_ERROR'|'SERVICE_QUOTA_EXCEEDED_ERROR'|'INTERNAL_SERVICE_ERROR' $code
 * @property string $message
 */
class ErrorDetails extends Shape
{
    /**
     * @param array{
     *     code: 'AUTHORIZATION_ERROR'|'RESOURCE_NOT_FOUND_ERROR'|'SERVICE_QUOTA_EXCEEDED_ERROR'|'INTERNAL_SERVICE_ERROR',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
