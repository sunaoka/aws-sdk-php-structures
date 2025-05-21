<?php

namespace Sunaoka\Aws\Structures\AppSync\UpdateChannelNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CODE'|'DIRECT' $behavior
 * @property Integration $integration
 */
class HandlerConfig extends Shape
{
    /**
     * @param array{
     *     behavior: 'CODE'|'DIRECT',
     *     integration: Integration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
