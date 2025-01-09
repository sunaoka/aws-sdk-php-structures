<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateClusterSettings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 * @property string $fargateEphemeralStorageKmsKeyId
 */
class ManagedStorageConfiguration extends Shape
{
    /**
     * @param array{
     *     kmsKeyId?: string,
     *     fargateEphemeralStorageKmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
