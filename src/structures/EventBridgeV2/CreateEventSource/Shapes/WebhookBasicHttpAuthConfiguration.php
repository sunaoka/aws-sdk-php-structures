<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Username
 * @property string|null $Password
 */
class WebhookBasicHttpAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     Username?: string|null,
     *     Password?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
