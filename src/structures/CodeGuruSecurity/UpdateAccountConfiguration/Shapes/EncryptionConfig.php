<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\UpdateAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $kmsKeyArn
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{kmsKeyArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
