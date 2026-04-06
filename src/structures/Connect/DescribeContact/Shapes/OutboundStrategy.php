<?php

namespace Sunaoka\Aws\Structures\Connect\DescribeContact\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AGENT_FIRST' $Type
 * @property OutboundStrategyConfig|null $Config
 */
class OutboundStrategy extends Shape
{
    /**
     * @param array{
     *     Type: 'AGENT_FIRST',
     *     Config?: OutboundStrategyConfig|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
