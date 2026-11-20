<?php

namespace Sunaoka\Aws\Structures\EventBridgeV2\DescribeEventSource\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $WebhookUrl
 * @property string|null $SecretArn
 */
class WebhookDetails extends Shape
{
    /**
     * @param array{
     *     WebhookUrl?: string|null,
     *     SecretArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
