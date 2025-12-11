<?php

namespace Sunaoka\Aws\Structures\BedrockRuntime\ConverseStream\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'priority'|'default'|'flex'|'reserved' $type
 */
class ServiceTier extends Shape
{
    /**
     * @param array{type: 'priority'|'default'|'flex'|'reserved'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
