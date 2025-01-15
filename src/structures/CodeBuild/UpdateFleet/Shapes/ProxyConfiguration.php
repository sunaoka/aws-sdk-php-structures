<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ALLOW_ALL'|'DENY_ALL'|null $defaultBehavior
 * @property list<FleetProxyRule>|null $orderedProxyRules
 */
class ProxyConfiguration extends Shape
{
    /**
     * @param array{
     *     defaultBehavior?: 'ALLOW_ALL'|'DENY_ALL'|null,
     *     orderedProxyRules?: list<FleetProxyRule>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
