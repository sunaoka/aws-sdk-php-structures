<?php

namespace Sunaoka\Aws\Structures\ApplicationSignals\ListAuditFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SourceNodeId
 * @property string|null $DestinationNodeId
 * @property double|null $Duration
 * @property 'INDIRECT'|'DIRECT'|null $ConnectionType
 */
class Edge extends Shape
{
    /**
     * @param array{
     *     SourceNodeId?: string|null,
     *     DestinationNodeId?: string|null,
     *     Duration?: double|null,
     *     ConnectionType?: 'INDIRECT'|'DIRECT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
