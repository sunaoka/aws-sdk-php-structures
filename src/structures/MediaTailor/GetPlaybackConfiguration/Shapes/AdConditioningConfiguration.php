<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'TRANSCODE'|'NONE' $StreamingMediaFileConditioning
 */
class AdConditioningConfiguration extends Shape
{
    /**
     * @param array{StreamingMediaFileConditioning: 'TRANSCODE'|'NONE'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
