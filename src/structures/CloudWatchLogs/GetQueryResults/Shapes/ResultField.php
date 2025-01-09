<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $field
 * @property string $value
 */
class ResultField extends Shape
{
    /**
     * @param array{
     *     field?: string,
     *     value?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
