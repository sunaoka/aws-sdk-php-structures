<?php

namespace Sunaoka\Aws\Structures\Lightsail\GetInstance\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'pending'|'applied' $state
 * @property 'optional'|'required' $httpTokens
 * @property 'disabled'|'enabled' $httpEndpoint
 * @property int $httpPutResponseHopLimit
 * @property 'disabled'|'enabled' $httpProtocolIpv6
 */
class InstanceMetadataOptions extends Shape
{
    /**
     * @param array{
     *     state?: 'pending'|'applied',
     *     httpTokens?: 'optional'|'required',
     *     httpEndpoint?: 'disabled'|'enabled',
     *     httpPutResponseHopLimit?: int,
     *     httpProtocolIpv6?: 'disabled'|'enabled'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
