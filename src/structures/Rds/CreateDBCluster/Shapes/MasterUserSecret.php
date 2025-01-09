<?php

namespace Sunaoka\Aws\Structures\Rds\CreateDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $SecretArn
 * @property string $SecretStatus
 * @property string $KmsKeyId
 */
class MasterUserSecret extends Shape
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
