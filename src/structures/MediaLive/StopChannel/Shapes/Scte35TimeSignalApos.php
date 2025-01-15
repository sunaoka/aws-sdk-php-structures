<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1000, 1000>|null $AdAvailOffset
 * @property 'FOLLOW'|'IGNORE'|null $NoRegionalBlackoutFlag
 * @property 'FOLLOW'|'IGNORE'|null $WebDeliveryAllowedFlag
 */
class Scte35TimeSignalApos extends Shape
{
    /**
     * @param array{
     *     AdAvailOffset?: int<-1000, 1000>|null,
     *     NoRegionalBlackoutFlag?: 'FOLLOW'|'IGNORE'|null,
     *     WebDeliveryAllowedFlag?: 'FOLLOW'|'IGNORE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
