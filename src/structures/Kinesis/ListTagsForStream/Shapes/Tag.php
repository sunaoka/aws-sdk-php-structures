<?php

namespace Sunaoka\Aws\Structures\Kinesis\ListTagsForStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string|null $Value
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
