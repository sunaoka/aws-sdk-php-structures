<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 */
class GetGatewayRequest extends Request
{
    /**
     * @param array{gatewayIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
