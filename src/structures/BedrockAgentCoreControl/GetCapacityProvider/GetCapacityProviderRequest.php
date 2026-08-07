<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetCapacityProvider;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $capacityProviderId
 */
class GetCapacityProviderRequest extends Request
{
    /**
     * @param array{capacityProviderId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
