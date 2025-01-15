<?php

namespace Sunaoka\Aws\Structures\CodePipeline\PutWebhook\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jsonPath
 * @property string|null $matchEquals
 */
class WebhookFilterRule extends Shape
{
    /**
     * @param array{
     *     jsonPath: string,
     *     matchEquals?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
