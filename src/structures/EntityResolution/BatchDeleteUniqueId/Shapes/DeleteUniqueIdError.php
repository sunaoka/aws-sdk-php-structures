<?php

namespace Sunaoka\Aws\Structures\EntityResolution\BatchDeleteUniqueId\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $uniqueId
 * @property 'SERVICE_ERROR'|'VALIDATION_ERROR' $errorType
 */
class DeleteUniqueIdError extends Shape
{
    /**
     * @param array{
     *     uniqueId: string,
     *     errorType: 'SERVICE_ERROR'|'VALIDATION_ERROR'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
