<?php

namespace Sunaoka\Aws\Structures\SecretsManager\DescribeSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PrimarySecretARN
 * @property 'InSync'|'Failed'|'InProgress'|'Pending'|'Detached'|null $ReplicationStatus
 * @property string|null $StatusMessage
 */
class CrossAccountPrimaryType extends Shape
{
    /**
     * @param array{
     *     PrimarySecretARN?: string|null,
     *     ReplicationStatus?: 'InSync'|'Failed'|'InProgress'|'Pending'|'Detached'|null,
     *     StatusMessage?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
