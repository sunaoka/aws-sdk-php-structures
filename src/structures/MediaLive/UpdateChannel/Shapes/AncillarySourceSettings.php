<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $SourceAncillaryChannelNumber
 */
class AncillarySourceSettings extends Shape
{
    /**
     * @param array{SourceAncillaryChannelNumber?: int|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
