<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\GetRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 */
class GetRegistryRequest extends Request
{
    /**
     * @param array{registryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
