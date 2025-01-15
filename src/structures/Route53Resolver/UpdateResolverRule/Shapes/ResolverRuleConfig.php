<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Name
 * @property list<TargetAddress>|null $TargetIps
 * @property string|null $ResolverEndpointId
 */
class ResolverRuleConfig extends Shape
{
    /**
     * @param array{
     *     Name?: string|null,
     *     TargetIps?: list<TargetAddress>|null,
     *     ResolverEndpointId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
