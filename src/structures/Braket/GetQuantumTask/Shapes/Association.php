<?php

namespace Sunaoka\Aws\Structures\Braket\GetQuantumTask\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property 'RESERVATION_TIME_WINDOW_ARN' $type
 */
class Association extends Shape
{
    /**
     * @param array{
     *     arn: string,
     *     type: 'RESERVATION_TIME_WINDOW_ARN'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
