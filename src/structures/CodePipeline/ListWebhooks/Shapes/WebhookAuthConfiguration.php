<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListWebhooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AllowedIPRange
 * @property string $SecretToken
 */
class WebhookAuthConfiguration extends Shape
{
    /**
     * @param array{
     *     AllowedIPRange?: string,
     *     SecretToken?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
