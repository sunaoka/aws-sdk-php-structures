<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'applied'|null $state
 * @property 'optional'|'required'|null $httpTokens
 * @property 'disabled'|'enabled'|null $httpEndpoint
 * @property int|null $httpPutResponseHopLimit
 * @property 'disabled'|'enabled'|null $httpProtocolIpv6
 */
class InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     state?: 'pending'|'applied'|null,
     *     httpTokens?: 'optional'|'required'|null,
     *     httpEndpoint?: 'disabled'|'enabled'|null,
     *     httpPutResponseHopLimit?: int|null,
     *     httpProtocolIpv6?: 'disabled'|'enabled'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
