<?php

namespace Sunaoka\Aws\Structures\Ecs\DeleteCluster\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyId
 * @property string|null $fargateEphemeralStorageKmsKeyId
 */
class ManagedStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string|null,
     *     fargateEphemeralStorageKmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
