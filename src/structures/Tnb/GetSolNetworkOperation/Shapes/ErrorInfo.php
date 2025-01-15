<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $cause
 * @property string|null $details
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     cause?: string|null,
     *     details?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
