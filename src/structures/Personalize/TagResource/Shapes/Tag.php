<?php

namespace Sunaoka\Aws\Structures\Personalize\TagResource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $tagKey
 * @property string $tagValue
 */
class Tag extends Shape
{
    /**
     * @param array{
     *     tagKey: string,
     *     tagValue: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
