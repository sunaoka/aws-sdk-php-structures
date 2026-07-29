<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeletePipeline\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|null $code
 * @property string|null $message
 */
class ResourceError extends Shape
{
    /**
     * @param array{
     *     code?: 'VALIDATION_ERROR'|'INTERNAL_FAILURE'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
