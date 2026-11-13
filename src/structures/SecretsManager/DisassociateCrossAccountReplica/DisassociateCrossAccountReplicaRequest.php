<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DisassociateCrossAccountReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $CrossAccountReplicaARN
 */
class DisassociateCrossAccountReplicaRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     CrossAccountReplicaARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
