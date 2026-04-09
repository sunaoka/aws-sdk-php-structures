<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteRegistry;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $registryId
 */
class DeleteRegistryRequest extends Request
{
    /**
     * @param array{registryId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
