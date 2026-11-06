<?php

namespace Sunaoka\Aws\Structures\QConnect\RegisterAssistantReplicaKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $assistantId
 * @property Shapes\ReplicaKmsKey $replicaKmsKey
 * @property string|null $clientToken
 */
class RegisterAssistantReplicaKeyRequest extends Request
{
    /**
     * @param array{
     *     assistantId: string,
     *     replicaKmsKey: Shapes\ReplicaKmsKey,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
