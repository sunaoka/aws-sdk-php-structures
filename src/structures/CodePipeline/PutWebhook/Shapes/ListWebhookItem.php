<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutWebhook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebhookDefinition $definition
 * @property string $url
 * @property string|null $errorMessage
 * @property string|null $errorCode
 * @property \Aws\Api\DateTimeResult|null $lastTriggered
 * @property string|null $arn
 * @property list<Tag>|null $tags
 */
class ListWebhookItem extends Shape
{
    /**
     * @param array{
     *     definition: WebhookDefinition,
     *     url: string,
     *     errorMessage?: string|null,
     *     errorCode?: string|null,
     *     lastTriggered?: \Aws\Api\DateTimeResult|null,
     *     arn?: string|null,
     *     tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
