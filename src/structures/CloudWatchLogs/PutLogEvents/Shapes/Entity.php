<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutLogEvents\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property array<string, string>|null $keyAttributes
 * @property array<string, string>|null $attributes
 */
class Entity extends Shape
{
    /**
     * @param array{
     *     keyAttributes?: array<string, string>|null,
     *     attributes?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
