<?php

namespace Sunaoka\Aws\Structures\PinpointEmail\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUIRE'|'OPTIONAL' $TlsPolicy
 * @property string $SendingPoolName
 */
class DeliveryOptions extends Shape
{
    /**
     * @param array{
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL',
     *     SendingPoolName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
