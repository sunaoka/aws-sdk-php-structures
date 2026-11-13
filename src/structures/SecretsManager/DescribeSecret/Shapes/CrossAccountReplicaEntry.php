<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ReplicaSecretARN
 * @property string|null $ReplicationRoleARN
 * @property 'InSync'|'Failed'|'InProgress'|'Pending'|'Detached'|null $ReplicationStatus
 * @property string|null $StatusMessage
 */
class CrossAccountReplicaEntry extends Shape
{
    /**
     * @param array{
     *     ReplicaSecretARN?: string|null,
     *     ReplicationRoleARN?: string|null,
     *     ReplicationStatus?: 'InSync'|'Failed'|'InProgress'|'Pending'|'Detached'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
