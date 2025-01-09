<?php

namespace Sunaoka\Aws\Structures\IoTEvents\ListInputRoutings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $arn
 */
class RoutedResource extends Shape
{
    /**
     * @param array{
     *     name?: string,
     *     arn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
