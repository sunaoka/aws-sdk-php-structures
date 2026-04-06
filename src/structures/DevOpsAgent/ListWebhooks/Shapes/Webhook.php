<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\ListWebhooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $webhookUrl
 * @property 'hmac'|'apikey'|'gitlab'|'pagerduty'|null $webhookType
 * @property string $webhookId
 */
class Webhook extends Shape
{
    /**
     * @param array{
     *     webhookUrl: string,
     *     webhookType?: 'hmac'|'apikey'|'gitlab'|'pagerduty'|null,
     *     webhookId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
