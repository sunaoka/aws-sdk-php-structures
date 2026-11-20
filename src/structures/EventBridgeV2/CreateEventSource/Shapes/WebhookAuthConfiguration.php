<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebhookStaticTokenAuthConfiguration|null $StaticTokenAuthConfiguration
 * @property WebhookBasicHttpAuthConfiguration|null $BasicHttpAuthConfiguration
 * @property WebhookHmacAuthConfiguration|null $HmacAuthConfiguration
 */
class WebhookAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     StaticTokenAuthConfiguration?: WebhookStaticTokenAuthConfiguration|null,
     *     BasicHttpAuthConfiguration?: WebhookBasicHttpAuthConfiguration|null,
     *     HmacAuthConfiguration?: WebhookHmacAuthConfiguration|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
