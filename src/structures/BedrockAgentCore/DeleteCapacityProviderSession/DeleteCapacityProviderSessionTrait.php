<?php

namespace Sunaoka\Aws\Structures\BedrockAgentCore\DeleteCapacityProviderSession;

trait DeleteCapacityProviderSessionTrait
{
    /**
     * @param DeleteCapacityProviderSessionRequest $args
     * @return DeleteCapacityProviderSessionResponse
     */
    public function deleteCapacityProviderSession(DeleteCapacityProviderSessionRequest $args)
    {
        $result = parent::deleteCapacityProviderSession($args->toArray());
        return new DeleteCapacityProviderSessionResponse($result->toArray());
    }
}
