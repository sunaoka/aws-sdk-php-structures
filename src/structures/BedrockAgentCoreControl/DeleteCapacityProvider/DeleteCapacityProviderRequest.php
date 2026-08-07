<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capacityProviderId
 * @property string|null $clientToken
 */
class DeleteCapacityProviderRequest extends Request
{
    /**
     * @param array{
     *     capacityProviderId: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
