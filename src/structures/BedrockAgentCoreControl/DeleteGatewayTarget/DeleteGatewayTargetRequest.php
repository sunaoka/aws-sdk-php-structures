<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteGatewayTarget;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $gatewayIdentifier
 * @property string $targetId
 */
class DeleteGatewayTargetRequest extends Request
{
    /**
     * @param array{
     *     gatewayIdentifier: string,
     *     targetId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
