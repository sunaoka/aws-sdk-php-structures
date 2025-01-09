<?php

namespace Sunaoka\Aws\Structures\CloudWatchEvents\PutPermission\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Type
 * @property string $Key
 * @property string $Value
 */
class Condition extends Shape
{
    /**
     * @param array{
     *     Type: string,
     *     Key: string,
     *     Value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
