<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutWebhook;

use Sunaoka\Aws\Structures\Request;

/**
 * @property Shapes\WebhookDefinition $webhook
 * @property list<Shapes\Tag>|null $tags
 */
class PutWebhookRequest extends Request
{
    /**
     * @param array{
     *     webhook: Shapes\WebhookDefinition,
     *     tags?: list<Shapes\Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
