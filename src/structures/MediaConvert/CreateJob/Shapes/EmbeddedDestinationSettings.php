<?php

namespace Sunaoka\Aws\Structures\MediaConvert\CreateJob\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 4> $Destination608ChannelNumber
 * @property int<1, 6> $Destination708ServiceNumber
 */
class EmbeddedDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Destination608ChannelNumber?: int<1, 4>,
     *     Destination708ServiceNumber?: int<1, 6>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
