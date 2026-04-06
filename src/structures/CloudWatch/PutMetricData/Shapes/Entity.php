<?php

namespace Sunaoka\Aws\Structures\CloudWatch\PutMetricData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $KeyAttributes
 * @property array<string, string>|null $Attributes
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     KeyAttributes?: array<string, string>|null,
     *     Attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
