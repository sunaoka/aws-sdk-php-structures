<?php

namespace Sunaoka\Aws\Structures\Ses\SendEmail\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Content|null $Text
 * @property Content|null $Html
 */
class Body extends Shape
{
    /**
     * @param array{
     *     Text?: Content|null,
     *     Html?: Content|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
