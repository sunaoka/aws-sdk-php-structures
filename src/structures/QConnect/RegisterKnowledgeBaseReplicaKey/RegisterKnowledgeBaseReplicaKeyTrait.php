<?php

namespace Sunaoka\Aws\Structures\QConnect\RegisterKnowledgeBaseReplicaKey;

trait RegisterKnowledgeBaseReplicaKeyTrait
{
    /**
     * @param RegisterKnowledgeBaseReplicaKeyRequest $args
     * @return RegisterKnowledgeBaseReplicaKeyResponse
     */
    public function registerKnowledgeBaseReplicaKey(RegisterKnowledgeBaseReplicaKeyRequest $args)
    {
        $result = parent::registerKnowledgeBaseReplicaKey($args->toArray());
        return new RegisterKnowledgeBaseReplicaKeyResponse($result->toArray());
    }
}
