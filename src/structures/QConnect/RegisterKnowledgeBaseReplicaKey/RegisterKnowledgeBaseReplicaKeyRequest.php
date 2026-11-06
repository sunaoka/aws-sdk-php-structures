<?php

namespace Sunaoka\Aws\Structures\QConnect\RegisterKnowledgeBaseReplicaKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $knowledgeBaseId
 * @property Shapes\ReplicaKmsKey $replicaKmsKey
 * @property string|null $clientToken
 */
class RegisterKnowledgeBaseReplicaKeyRequest extends Request
{
    /**
     * @param array{
     *     knowledgeBaseId: string,
     *     replicaKmsKey: Shapes\ReplicaKmsKey,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
