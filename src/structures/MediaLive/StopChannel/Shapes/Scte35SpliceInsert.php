<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $AdAvailOffset
 * @property 'FOLLOW'|'IGNORE' $NoRegionalBlackoutFlag
 * @property 'FOLLOW'|'IGNORE' $WebDeliveryAllowedFlag
 */
class Scte35SpliceInsert extends Shape
{
    /**
     * @param array{
     *     AdAvailOffset?: int,
     *     NoRegionalBlackoutFlag?: 'FOLLOW'|'IGNORE',
     *     WebDeliveryAllowedFlag?: 'FOLLOW'|'IGNORE'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
