<?php

namespace Sunaoka\Aws\Structures\DataSync\UpdateLocationObjectStorage\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SecretArn
 * @property string|null $KmsKeyArn
 */
class CmkSecretConfig extends Shape
{
    /**
     * @param array{
     *     SecretArn?: string|null,
     *     KmsKeyArn?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
