<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateSnapshot\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $KmsKeyId
 */
class AssociatedKmsKey extends Shape
{
    /**
     * @param array{KmsKeyId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
