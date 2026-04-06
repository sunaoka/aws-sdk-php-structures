<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGateway;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 */
class DeleteGatewayRequest extends Request
{
    /**
     * @param array{gatewayIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
