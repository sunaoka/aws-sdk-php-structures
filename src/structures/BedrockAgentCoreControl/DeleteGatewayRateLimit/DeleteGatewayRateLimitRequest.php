<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGatewayRateLimit;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $rateLimitId
 */
class DeleteGatewayRateLimitRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     rateLimitId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
