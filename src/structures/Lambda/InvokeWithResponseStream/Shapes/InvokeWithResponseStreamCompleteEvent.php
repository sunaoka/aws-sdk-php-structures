<?php

namespace Sunaoka\Aws\Structures\Lambda\InvokeWithResponseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorCode
 * @property string|null $ErrorDetails
 * @property string|null $LogResult
 */
class InvokeWithResponseStreamCompleteEvent extends Shape
{
    /**
     * @param array{
     *     ErrorCode?: string|null,
     *     ErrorDetails?: string|null,
     *     LogResult?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
