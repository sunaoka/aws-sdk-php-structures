<?php

namespace Sunaoka\Aws\Structures\Glue\CreateMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MLUserDataEncryption $MlUserDataEncryption
 * @property string $TaskRunSecurityConfigurationName
 */
class TransformEncryption extends Shape
{
    /**
     * @param array{
     *     MlUserDataEncryption?: MLUserDataEncryption,
     *     TaskRunSecurityConfigurationName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
