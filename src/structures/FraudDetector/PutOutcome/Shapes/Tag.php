<?php

namespace Sunaoka\Aws\Structures\FraudDetector\PutOutcome\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $key
 * @property string $value
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     key: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
