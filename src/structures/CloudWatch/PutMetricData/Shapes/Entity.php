<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $KeyAttributes
 * @property array<string, string> $Attributes
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>,
     *     Attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
