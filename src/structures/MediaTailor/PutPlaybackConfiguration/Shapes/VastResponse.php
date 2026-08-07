<?php

namespace Sunaoka\Aws\Structures\MediaTailor\PutPlaybackConfiguration\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'FOLLOW_AD_SEQUENCE'|'IGNORE_AD_SEQUENCE'|'FOLLOW_AD_SEQUENCE_ONLY_LIVE'|'FOLLOW_AD_SEQUENCE_ONLY_VOD'|null $AdSequencingMode
 */
class VastResponse extends Shape
{
    /**
     * @param array{AdSequencingMode?: 'FOLLOW_AD_SEQUENCE'|'IGNORE_AD_SEQUENCE'|'FOLLOW_AD_SEQUENCE_ONLY_LIVE'|'FOLLOW_AD_SEQUENCE_ONLY_VOD'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
