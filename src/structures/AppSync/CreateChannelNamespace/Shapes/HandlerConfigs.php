<?php

namespace Sunaoka\Aws\Structures\AppSync\CreateChannelNamespace\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property HandlerConfig|null $onPublish
 * @property HandlerConfig|null $onSubscribe
 */
class HandlerConfigs extends Shape
{
    /**
     * @param array{
     *     onPublish?: HandlerConfig|null,
     *     onSubscribe?: HandlerConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
