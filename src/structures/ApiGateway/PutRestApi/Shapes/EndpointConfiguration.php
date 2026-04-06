<?php

namespace Sunaoka\Aws\Structures\ApiGateway\PutRestApi\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'REGIONAL'|'EDGE'|'PRIVATE'>|null $types
 * @property 'ipv4'|'dualstack'|null $ipAddressType
 * @property list<string>|null $vpcEndpointIds
 */
class EndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     types?: list<'REGIONAL'|'EDGE'|'PRIVATE'>|null,
     *     ipAddressType?: 'ipv4'|'dualstack'|null,
     *     vpcEndpointIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
