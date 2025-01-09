<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetDomainName\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'REGIONAL'|'EDGE'|'PRIVATE'> $types
 * @property list<string> $vpcEndpointIds
 */
class EndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     types?: list<'REGIONAL'|'EDGE'|'PRIVATE'>,
     *     vpcEndpointIds?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
