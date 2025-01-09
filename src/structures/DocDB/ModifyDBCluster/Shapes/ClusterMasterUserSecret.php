<?php

namespace Sunaoka\Aws\Structures\DocDB\ModifyDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 * @property string $SecretStatus
 * @property string $KmsKeyId
 */
class ClusterMasterUserSecret extends Shape
{
    /**
     * @param array{
     *     SecretArn?: string,
     *     SecretStatus?: string,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
