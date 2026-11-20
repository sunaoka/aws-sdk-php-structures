<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\CreateEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $TokenHttpHeader
 * @property string|null $SecretValue
 */
class WebhookStaticTokenAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     TokenHttpHeader: string,
     *     SecretValue?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
