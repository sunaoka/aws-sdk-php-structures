<?php

namespace Sunaoka\Aws\Structures\Route53Resolver\UpdateResolverRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Name
 * @property list<TargetAddress> $TargetIps
 * @property string $ResolverEndpointId
 */
class ResolverRuleConfig extends Shape
{
    /**
     * @param array{
     *     Name?: string,
     *     TargetIps?: list<TargetAddress>,
     *     ResolverEndpointId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
