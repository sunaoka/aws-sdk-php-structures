<?php

namespace Sunaoka\Aws\Structures\DataSync\CreateLocationObjectStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Key
 * @property string $Value
 */
class TagListEntry extends Shape
{
    /**
     * @param array{
     *     Key: string,
     *     Value?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
