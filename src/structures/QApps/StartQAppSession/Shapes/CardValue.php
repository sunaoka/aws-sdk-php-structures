<?php

namespace Sunaoka\Aws\Structures\QApps\StartQAppSession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $cardId
 * @property string $value
 */
class CardValue extends Shape
{
    /**
     * @param array{
     *     cardId: string,
     *     value: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
