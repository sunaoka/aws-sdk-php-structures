<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateNetworkInsightsAccessScope\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PacketHeaderStatementRequest $PacketHeaderStatement
 * @property ResourceStatementRequest $ResourceStatement
 */
class PathStatementRequest extends Shape
{
    /**
     * @param array{
     *     PacketHeaderStatement?: PacketHeaderStatementRequest,
     *     ResourceStatement?: ResourceStatementRequest
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
