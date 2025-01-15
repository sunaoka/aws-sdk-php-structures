<?php

namespace Sunaoka\Aws\Structures\AppRegistry\PutConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $tagKey
 */
class TagQueryConfiguration extends Shape
{
    /**
     * @param array{tagKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
