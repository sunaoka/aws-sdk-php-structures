<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ReplicateSecretToRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $KmsKeyId
 * @property 'InSync'|'Failed'|'InProgress'|null $Status
 * @property string|null $StatusMessage
 * @property \Aws\Api\DateTimeResult|null $LastAccessedDate
 */
class ReplicationStatusType extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     KmsKeyId?: string|null,
     *     Status?: 'InSync'|'Failed'|'InProgress'|null,
     *     StatusMessage?: string|null,
     *     LastAccessedDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
