<?php

namespace Sunaoka\Aws\Structures\Ecs\UpdateServicePrimaryTaskSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyId
 */
class DeploymentEphemeralStorage extends Shape
{
    /**
     * @param array{kmsKeyId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
