<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstanceAccessDetails\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $ciphertext
 * @property string|null $keyPairName
 */
class PasswordData extends Shape
{
    /**
     * @param array{
     *     ciphertext?: string|null,
     *     keyPairName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
