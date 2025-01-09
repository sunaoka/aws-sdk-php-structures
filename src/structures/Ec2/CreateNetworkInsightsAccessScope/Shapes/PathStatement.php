<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PacketHeaderStatement $PacketHeaderStatement
 * @property ResourceStatement $ResourceStatement
 */
class PathStatement extends Shape
{
    /**
     * @param array{
     *     PacketHeaderStatement?: PacketHeaderStatement,
     *     ResourceStatement?: ResourceStatement
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
