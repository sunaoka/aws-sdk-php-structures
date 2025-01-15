<?php

namespace Sunaoka\Aws\Structures\Redshift\GetReservedNodeExchangeConfigurationOptions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ReservedNode|null $SourceReservedNode
 * @property int|null $TargetReservedNodeCount
 * @property ReservedNodeOffering|null $TargetReservedNodeOffering
 */
class ReservedNodeConfigurationOption extends Shape
{
    /**
     * @param array{
     *     SourceReservedNode?: ReservedNode|null,
     *     TargetReservedNodeCount?: int|null,
     *     TargetReservedNodeOffering?: ReservedNodeOffering|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
