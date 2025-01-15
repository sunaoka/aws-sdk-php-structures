<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PacketHeaderStatementRequest|null $PacketHeaderStatement
 * @property ResourceStatementRequest|null $ResourceStatement
 */
class PathStatementRequest extends Shape
{
    /**
     * @param array{
     *     PacketHeaderStatement?: PacketHeaderStatementRequest|null,
     *     ResourceStatement?: ResourceStatementRequest|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
