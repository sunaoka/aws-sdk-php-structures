<?php

namespace Sunaoka\Aws\Structures\SecretsManager\CreateSecret\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Region
 * @property string|null $KmsKeyId
 */
class ReplicaRegionType extends Shape
{
    /**
     * @param array{
     *     Region?: string|null,
     *     KmsKeyId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
