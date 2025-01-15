<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\GetQueryResults\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $field
 * @property string|null $value
 */
class ResultField extends Shape
{
    /**
     * @param array{
     *     field?: string|null,
     *     value?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
