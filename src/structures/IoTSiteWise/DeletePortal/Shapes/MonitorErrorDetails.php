<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DeletePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_FAILURE'|'VALIDATION_ERROR'|'LIMIT_EXCEEDED'|null $code
 * @property string|null $message
 */
class MonitorErrorDetails extends Shape
{
    /**
     * @param array{
     *     code?: 'INTERNAL_FAILURE'|'VALIDATION_ERROR'|'LIMIT_EXCEEDED'|null,
     *     message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
