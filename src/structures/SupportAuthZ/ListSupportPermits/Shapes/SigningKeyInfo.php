<?php

namespace Sunaoka\Aws\Structures\SupportAuthZ\ListSupportPermits\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $kmsKey
 */
class SigningKeyInfo extends Shape
{
    /**
     * @param array{kmsKey?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
