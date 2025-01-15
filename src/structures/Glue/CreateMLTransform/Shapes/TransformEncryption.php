<?php

namespace Sunaoka\Aws\Structures\Glue\CreateMLTransform\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MLUserDataEncryption|null $MlUserDataEncryption
 * @property string|null $TaskRunSecurityConfigurationName
 */
class TransformEncryption extends Shape
{
    /**
     * @param array{
     *     MlUserDataEncryption?: MLUserDataEncryption|null,
     *     TaskRunSecurityConfigurationName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
