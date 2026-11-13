<?php

namespace Sunaoka\Aws\Structures\SecretsManager\AssociateCrossAccountReplica;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SecretId
 * @property string $CrossAccountReplicaARN
 * @property 'SameOrg'|'NoRestriction'|null $ReplicaRestriction
 * @property string|null $ReplicationRoleARN
 */
class AssociateCrossAccountReplicaRequest extends Request
{
    /**
     * @param array{
     *     SecretId: string,
     *     CrossAccountReplicaARN: string,
     *     ReplicaRestriction?: 'SameOrg'|'NoRestriction'|null,
     *     ReplicationRoleARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
