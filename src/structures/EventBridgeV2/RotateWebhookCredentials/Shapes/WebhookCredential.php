<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\RotateWebhookCredentials\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StaticTokenSecretValue
 * @property string|null $BasicHttpPassword
 * @property string|null $HmacSecretValue
 */
class WebhookCredential extends Shape
{
    /**
     * @param array{
     *     StaticTokenSecretValue?: string|null,
     *     BasicHttpPassword?: string|null,
     *     HmacSecretValue?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
