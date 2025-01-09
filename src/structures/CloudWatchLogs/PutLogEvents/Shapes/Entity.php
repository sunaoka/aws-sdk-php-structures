<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string> $keyAttributes
 * @property array<string, string> $attributes
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     keyAttributes?: array<string, string>,
     *     attributes?: array<string, string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
