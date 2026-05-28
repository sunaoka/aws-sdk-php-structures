<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\CreateReport\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'INSUFFICIENT_PERMISSIONS'|'CONFIGURATION_ERROR'|'INTERNAL_ERROR' $errorCode
 * @property string|null $errorMessage
 */
class FailedReportOutput extends Shape
{
    /**
     * @param array{
     *     errorCode: 'INSUFFICIENT_PERMISSIONS'|'CONFIGURATION_ERROR'|'INTERNAL_ERROR',
     *     errorMessage?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
