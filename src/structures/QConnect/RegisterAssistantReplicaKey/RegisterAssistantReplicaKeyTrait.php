<?php

namespace Sunaoka\Aws\Structures\QConnect\RegisterAssistantReplicaKey;

trait RegisterAssistantReplicaKeyTrait
{
    /**
     * @param RegisterAssistantReplicaKeyRequest $args
     * @return RegisterAssistantReplicaKeyResponse
     */
    public function registerAssistantReplicaKey(RegisterAssistantReplicaKeyRequest $args)
    {
        $result = parent::registerAssistantReplicaKey($args->toArray());
        return new RegisterAssistantReplicaKeyResponse($result->toArray());
    }
}
