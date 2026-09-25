<?php

namespace Sunaoka\Aws\Structures\QConnect\Retrieve\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $associationId
 * @property 'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'VALIDATION_ERROR'|'THROTTLED'|'DEPENDENCY_FAILED'|'INTERNAL_SERVER_ERROR' $code
 * @property string $message
 */
class RetrieveError extends Shape
{
    /**
     * @param array{
     *     associationId: string,
     *     code: 'ACCESS_DENIED'|'RESOURCE_NOT_FOUND'|'VALIDATION_ERROR'|'THROTTLED'|'DEPENDENCY_FAILED'|'INTERNAL_SERVER_ERROR',
     *     message: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
