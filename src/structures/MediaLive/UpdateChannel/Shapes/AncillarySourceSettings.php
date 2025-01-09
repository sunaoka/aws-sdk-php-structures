<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<1, 4> $SourceAncillaryChannelNumber
 */
class AncillarySourceSettings extends Shape
{
    /**
     * @param array{SourceAncillaryChannelNumber?: int<1, 4>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
