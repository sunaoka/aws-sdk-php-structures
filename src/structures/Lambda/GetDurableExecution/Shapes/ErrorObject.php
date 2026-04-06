<?php

namespace Sunaoka\Aws\Structures\Lambda\GetDurableExecution\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ErrorMessage
 * @property string|null $ErrorType
 * @property string|null $ErrorData
 * @property list<string>|null $StackTrace
 */
class ErrorObject extends Shape
{
    /**
     * @param array{
     *     ErrorMessage?: string|null,
     *     ErrorType?: string|null,
     *     ErrorData?: string|null,
     *     StackTrace?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
