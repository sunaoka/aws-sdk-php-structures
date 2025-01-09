<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\GetGeneratedPolicy\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTHORIZATION_ERROR'|'RESOURCE_NOT_FOUND_ERROR'|'SERVICE_QUOTA_EXCEEDED_ERROR'|'SERVICE_ERROR' $code
 * @property string $message
 */
class JobError extends Shape
{
    /**
     * @param array{
     *     code: 'AUTHORIZATION_ERROR'|'RESOURCE_NOT_FOUND_ERROR'|'SERVICE_QUOTA_EXCEEDED_ERROR'|'SERVICE_ERROR',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
