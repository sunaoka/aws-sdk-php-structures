<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PacketHeaderStatement|null $PacketHeaderStatement
 * @property ResourceStatement|null $ResourceStatement
 */
class PathStatement extends Shape
{
    /**
     * @param array{
     *     PacketHeaderStatement?: PacketHeaderStatement|null,
     *     ResourceStatement?: ResourceStatement|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
