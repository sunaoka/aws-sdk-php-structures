<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'SERVICE_ERROR'|'VALIDATION_ERROR' $errorType
 * @property string $uniqueId
 */
class DeleteUniqueIdError extends Shape
{
    /**
     * @param array{
     *     errorType: 'SERVICE_ERROR'|'VALIDATION_ERROR',
     *     uniqueId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
