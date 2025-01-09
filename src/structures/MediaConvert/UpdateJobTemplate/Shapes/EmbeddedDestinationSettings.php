<?php

namespace Sunaoka\Aws\Structures\MediaConvert\UpdateJobTemplate\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $Destination608ChannelNumber
 * @property int $Destination708ServiceNumber
 */
class EmbeddedDestinationSettings extends Shape
{
    /**
     * @param array{
     *     Destination608ChannelNumber?: int,
     *     Destination708ServiceNumber?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
