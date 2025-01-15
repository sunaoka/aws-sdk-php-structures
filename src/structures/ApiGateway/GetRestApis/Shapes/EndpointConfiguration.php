<?php

namespace Sunaoka\Aws\Structures\ApiGateway\GetRestApis\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<'REGIONAL'|'EDGE'|'PRIVATE'>|null $types
 * @property list<string>|null $vpcEndpointIds
 */
class EndpointConfiguration extends Shape
{
    /**
     * @param array{
     *     types?: list<'REGIONAL'|'EDGE'|'PRIVATE'>|null,
     *     vpcEndpointIds?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
