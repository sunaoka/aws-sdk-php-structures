<?php

namespace Sunaoka\Aws\Structures\LexModelsV2\ListSlots\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $text
 * @property string $value
 */
class Button extends Shape
{
    /**
     * @param array{
     *     text: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
