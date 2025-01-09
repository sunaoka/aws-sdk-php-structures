<?php

namespace Sunaoka\Aws\Structures\CodeBuild\UpdateFleet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DOMAIN'|'IP' $type
 * @property 'ALLOW'|'DENY' $effect
 * @property list<string> $entities
 */
class FleetProxyRule extends Shape
{
    /**
     * @param array{
     *     type: 'DOMAIN'|'IP',
     *     effect: 'ALLOW'|'DENY',
     *     entities: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
