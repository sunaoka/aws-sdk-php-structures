<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<-1000, 1000> $AdAvailOffset
 * @property 'FOLLOW'|'IGNORE' $NoRegionalBlackoutFlag
 * @property 'FOLLOW'|'IGNORE' $WebDeliveryAllowedFlag
 */
class Scte35TimeSignalApos extends Shape
{
    /**
     * @param array{
     *     AdAvailOffset?: int<-1000, 1000>,
     *     NoRegionalBlackoutFlag?: 'FOLLOW'|'IGNORE',
     *     WebDeliveryAllowedFlag?: 'FOLLOW'|'IGNORE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
