<?php

namespace Sunaoka\Aws\Structures\MediaConvert\ListPresets\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 4>|null $Destination608ChannelNumber
 * @property int<1, 6>|null $Destination708ServiceNumber
 */
class EmbeddedDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Destination608ChannelNumber?: int<1, 4>|null,
     *     Destination708ServiceNumber?: int<1, 6>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
