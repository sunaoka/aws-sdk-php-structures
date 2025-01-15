<?php

namespace Sunaoka\Aws\Structures\Chime\PutEventsConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $BotId
 * @property string|null $OutboundEventsHTTPSEndpoint
 * @property string|null $LambdaFunctionArn
 */
class EventsConfiguration extends Shape
{
    /**
     * @param array{
     *     BotId?: string|null,
     *     OutboundEventsHTTPSEndpoint?: string|null,
     *     LambdaFunctionArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
