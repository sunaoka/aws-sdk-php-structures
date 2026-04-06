<?php

namespace Sunaoka\Aws\Structures\Connect\SendChatIntegrationEvent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StreamingEndpointArn
 */
class ChatStreamingConfiguration extends Shape
{
    /**
     * @param array{StreamingEndpointArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
