<?php

namespace Sunaoka\Aws\Structures\DevOpsAgent\UpdateAssociation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $webhookUrl
 * @property string|null $webhookId
 * @property 'hmac'|'apikey'|'gitlab'|'pagerduty'|null $webhookType
 * @property string|null $webhookSecret
 * @property string|null $apiKey
 */
class GenericWebhook extends Shape
{
    /**
     * @param array{
     *     webhookUrl?: string|null,
     *     webhookId?: string|null,
     *     webhookType?: 'hmac'|'apikey'|'gitlab'|'pagerduty'|null,
     *     webhookSecret?: string|null,
     *     apiKey?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
