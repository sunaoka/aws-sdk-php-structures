<?php

namespace Sunaoka\Aws\Structures\CodePipeline\ListWebhooks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $jsonPath
 * @property string $matchEquals
 */
class WebhookFilterRule extends Shape
{
    /**
     * @param array{
     *     jsonPath: string,
     *     matchEquals?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
