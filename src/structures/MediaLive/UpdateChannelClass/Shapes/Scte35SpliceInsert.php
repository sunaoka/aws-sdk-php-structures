<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannelClass\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int|null $AdAvailOffset
 * @property 'FOLLOW'|'IGNORE'|null $NoRegionalBlackoutFlag
 * @property 'FOLLOW'|'IGNORE'|null $WebDeliveryAllowedFlag
 */
class Scte35SpliceInsert extends Shape
{
    /**
     * @param array{
     *     AdAvailOffset?: int|null,
     *     NoRegionalBlackoutFlag?: 'FOLLOW'|'IGNORE'|null,
     *     WebDeliveryAllowedFlag?: 'FOLLOW'|'IGNORE'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
