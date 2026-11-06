<?php

namespace Sunaoka\Aws\Structures\QConnect\CreateAssistant\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 * @property list<ReplicaKmsKey>|null $replicaKmsKeys
 */
class ServerSideEncryptionConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     replicaKmsKeys?: list<ReplicaKmsKey>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
