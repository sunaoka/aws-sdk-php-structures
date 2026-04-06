<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUIRE'|'OPTIONAL'|null $TlsPolicy
 * @property string|null $SendingPoolName
 * @property int<300, 50400>|null $MaxDeliverySeconds
 */
class DeliveryOptions extends Shape
{
    /**
     * @param array{
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL'|null,
     *     SendingPoolName?: string|null,
     *     MaxDeliverySeconds?: int<300, 50400>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
