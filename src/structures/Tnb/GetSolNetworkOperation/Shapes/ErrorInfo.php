<?php

namespace Sunaoka\Aws\Structures\Tnb\GetSolNetworkOperation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cause
 * @property string $details
 */
class ErrorInfo extends Shape
{
    /**
     * @param array{
     *     cause?: string,
     *     details?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
