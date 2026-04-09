<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCoreControl\DeleteRegistry;

trait DeleteRegistryTrait
{
    /**
     * @param DeleteRegistryRequest $args
     * @return DeleteRegistryResponse
     */
    public function deleteRegistry(DeleteRegistryRequest $args)
    {
        $result = parent::deleteRegistry($args->toArray());
        return new DeleteRegistryResponse($result->toArray());
    }
}
