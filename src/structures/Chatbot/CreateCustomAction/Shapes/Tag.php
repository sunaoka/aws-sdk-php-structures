<?php

namespace Sunaoka\Aws\Structures\Chatbot\CreateCustomAction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TagKey
 * @property string $TagValue
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     TagKey: string,
     *     TagValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
