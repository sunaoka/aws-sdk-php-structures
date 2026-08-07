<?php

namespace Sunaoka\Aws\Structures\MediaTailor\GetPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOW_AD_SEQUENCE'|'IGNORE_AD_SEQUENCE'|null $AdSequencingMode
 */
class PreRollVastResponse extends Shape
{
    /**
     * @param array{AdSequencingMode?: 'FOLLOW_AD_SEQUENCE'|'IGNORE_AD_SEQUENCE'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
