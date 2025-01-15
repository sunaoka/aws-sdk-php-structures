<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutWebhook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AllowedIPRange
 * @property string|null $SecretToken
 */
class WebhookAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     AllowedIPRange?: string|null,
     *     SecretToken?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
