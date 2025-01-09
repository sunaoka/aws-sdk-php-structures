<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListWebhooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property WebhookDefinition $definition
 * @property string $url
 * @property string $errorMessage
 * @property string $errorCode
 * @property \Aws\Api\DateTimeResult $lastTriggered
 * @property string $arn
 * @property list<Tag> $tags
 */
class ListWebhookItem extends Shape
{
    /**
     * @param array{
     *     definition: WebhookDefinition,
     *     url: string,
     *     errorMessage?: string,
     *     errorCode?: string,
     *     lastTriggered?: \Aws\Api\DateTimeResult,
     *     arn?: string,
     *     tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
