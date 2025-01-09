<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutWebhook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property string $targetPipeline
 * @property string $targetAction
 * @property list<WebhookFilterRule> $filters
 * @property 'GITHUB_HMAC'|'IP'|'UNAUTHENTICATED' $authentication
 * @property WebhookAuthConfiguration $authenticationConfiguration
 */
class WebhookDefinition extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     targetPipeline: string,
     *     targetAction: string,
     *     filters: list<WebhookFilterRule>,
     *     authentication: 'GITHUB_HMAC'|'IP'|'UNAUTHENTICATED',
     *     authenticationConfiguration: WebhookAuthConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
