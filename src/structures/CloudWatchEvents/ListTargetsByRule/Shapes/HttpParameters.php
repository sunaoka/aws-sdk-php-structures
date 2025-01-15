<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $PathParameterValues
 * @property array<string, string>|null $HeaderParameters
 * @property array<string, string>|null $QueryStringParameters
 */
class HttpParameters extends Shape
{
    /**
     * @param array{
     *     PathParameterValues?: list<string>|null,
     *     HeaderParameters?: array<string, string>|null,
     *     QueryStringParameters?: array<string, string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
