<?php

namespace Sunaoka\Aws\Structures\SesV2\CreateConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUIRE'|'OPTIONAL' $TlsPolicy
 * @property string $SendingPoolName
 * @property int $MaxDeliverySeconds
 */
class DeliveryOptions extends Shape
{
    /**
     * @param array{
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL',
     *     SendingPoolName?: string,
     *     MaxDeliverySeconds?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
