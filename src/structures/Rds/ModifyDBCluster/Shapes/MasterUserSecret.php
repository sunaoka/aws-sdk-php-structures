<?php

namespace Sunaoka\Aws\Structures\Rds\ModifyDBCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 * @property string|null $SecretStatus
 * @property string|null $KmsKeyId
 */
class MasterUserSecret extends Shape
{
    /**
     * @param array{
     *     SecretArn?: string|null,
     *     SecretStatus?: string|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
