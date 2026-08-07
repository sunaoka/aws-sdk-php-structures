<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteCapacityProviderSession;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capacityProviderId
 * @property string $sessionId
 */
class DeleteCapacityProviderSessionRequest extends Request
{
    /**
     * @param array{
     *     capacityProviderId: string,
     *     sessionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
