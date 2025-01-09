<?php

namespace Sunaoka\Aws\Structures\Chime\ListProxySessions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $PhoneNumber
 * @property string $ProxyPhoneNumber
 */
class Participant extends Shape
{
    /**
     * @param array{
     *     PhoneNumber?: string,
     *     ProxyPhoneNumber?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
