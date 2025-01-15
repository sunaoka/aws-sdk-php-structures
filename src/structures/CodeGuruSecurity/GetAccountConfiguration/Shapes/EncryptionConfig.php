<?php

namespace Sunaoka\Aws\Structures\CodeGuruSecurity\GetAccountConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKeyArn
 */
class EncryptionConfig extends Shape
{
    /**
     * @param array{kmsKeyArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
