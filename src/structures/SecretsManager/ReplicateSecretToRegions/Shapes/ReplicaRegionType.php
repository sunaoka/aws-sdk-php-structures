<?php

namespace Sunaoka\Aws\Structures\SecretsManager\ReplicateSecretToRegions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Region
 * @property string $KmsKeyId
 */
class ReplicaRegionType extends Shape
{
    /**
     * @param array{
     *     Region?: string,
     *     KmsKeyId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
