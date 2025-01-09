<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\DescribePortal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INTERNAL_FAILURE'|'VALIDATION_ERROR'|'LIMIT_EXCEEDED' $code
 * @property string $message
 */
class MonitorErrorDetails extends Shape
{
    /**
     * @param array{
     *     code?: 'INTERNAL_FAILURE'|'VALIDATION_ERROR'|'LIMIT_EXCEEDED',
     *     message?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
