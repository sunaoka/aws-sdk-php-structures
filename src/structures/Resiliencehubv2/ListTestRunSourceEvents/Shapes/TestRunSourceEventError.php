<?php

namespace Sunaoka\Aws\Structures\Resiliencehubv2\ListTestRunSourceEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ACCESS_DENIED'|'INTERNAL_ERROR' $errorCode
 * @property string $errorMessage
 */
class TestRunSourceEventError extends Shape
{
    /**
     * @param array{
     *     errorCode: 'ACCESS_DENIED'|'INTERNAL_ERROR',
     *     errorMessage: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
