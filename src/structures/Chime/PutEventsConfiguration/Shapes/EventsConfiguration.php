<?php

namespace Sunaoka\Aws\Structures\Chime\PutEventsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $BotId
 * @property string $OutboundEventsHTTPSEndpoint
 * @property string $LambdaFunctionArn
 */
class EventsConfiguration extends Shape
{
    /**
     * @param array{
     *     BotId?: string,
     *     OutboundEventsHTTPSEndpoint?: string,
     *     LambdaFunctionArn?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
