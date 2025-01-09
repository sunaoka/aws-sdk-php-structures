<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ciphertext
 * @property string $keyPairName
 */
class PasswordData extends Shape
{
    /**
     * @param array{
     *     ciphertext?: string,
     *     keyPairName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
