<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ErrorCode
 * @property string $ErrorDetails
 * @property string $LogResult
 */
class InvokeWithResponseStreamCompleteEvent extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string,
     *     ErrorDetails?: string,
     *     LogResult?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
