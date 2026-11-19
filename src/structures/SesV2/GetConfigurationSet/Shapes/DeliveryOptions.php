<?php

namespace Sunaoka\Aws\Structures\SesV2\GetConfigurationSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'REQUIRE'|'OPTIONAL'|null $TlsPolicy
 * @property string|null $SendingPoolName
 * @property int<300, 50400>|null $MaxDeliverySeconds
 * @property 'GLOBAL'|'REGIONAL'|'ACCOUNT'|null $SharedPoolDeliveryMode
 */
class DeliveryOptions extends Shape
{
    /**
     * @param array{
     *     TlsPolicy?: 'REQUIRE'|'OPTIONAL'|null,
     *     SendingPoolName?: string|null,
     *     MaxDeliverySeconds?: int<300, 50400>|null,
     *     SharedPoolDeliveryMode?: 'GLOBAL'|'REGIONAL'|'ACCOUNT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
