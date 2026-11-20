<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetUpdate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $linkId
 * @property string $ruleId
 */
class RoutingRuleTarget extends Shape
{
    /**
     * @param array{
     *     linkId: string,
     *     ruleId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
