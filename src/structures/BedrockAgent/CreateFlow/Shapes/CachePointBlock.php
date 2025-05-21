<?php

namespace Sunaoka\Aws\Structures\BedrockAgent\CreateFlow\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default' $type
 */
class CachePointBlock extends Shape
{
    /**
     * @param array{type: 'default'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
