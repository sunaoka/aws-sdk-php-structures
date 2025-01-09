<?php

namespace Sunaoka\Aws\Structures\CodeBuild\CreateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW_ALL'|'DENY_ALL' $defaultBehavior
 * @property list<FleetProxyRule> $orderedProxyRules
 */
class ProxyConfiguration extends Shape
{
    /**
     * @param array{
     *     defaultBehavior?: 'ALLOW_ALL'|'DENY_ALL',
     *     orderedProxyRules?: list<FleetProxyRule>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
