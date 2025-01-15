<?php

namespace Sunaoka\Aws\Structures\PersonalizeEvents\PutItems\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $itemId
 * @property string|null $properties
 */
class Item extends Shape
{
    /**
     * @param array{
     *     itemId: string,
     *     properties?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
