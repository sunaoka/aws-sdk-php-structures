<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservedNode $SourceReservedNode
 * @property int $TargetReservedNodeCount
 * @property ReservedNodeOffering $TargetReservedNodeOffering
 */
class ReservedNodeConfigurationOption extends Shape
{
    /**
     * @param array{
     *     SourceReservedNode?: ReservedNode,
     *     TargetReservedNodeCount?: int,
     *     TargetReservedNodeOffering?: ReservedNodeOffering
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
