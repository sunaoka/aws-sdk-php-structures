<?php

namespace Sunaoka\Aws\Structures\Chime\GetProxySession\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PhoneNumber
 * @property string|null $ProxyPhoneNumber
 */
class Participant extends Shape
{
    /**
     * @param array{
     *     PhoneNumber?: string|null,
     *     ProxyPhoneNumber?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
