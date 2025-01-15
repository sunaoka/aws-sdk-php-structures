<?php

namespace Sunaoka\Aws\Structures\Chime\PutEventsConfiguration;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 * @property string $BotId
 * @property string|null $OutboundEventsHTTPSEndpoint
 * @property string|null $LambdaFunctionArn
 */
class PutEventsConfigurationRequest extends Request
{
    /**
     * @param array{
     *     AccountId: string,
     *     BotId: string,
     *     OutboundEventsHTTPSEndpoint?: string|null,
     *     LambdaFunctionArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
