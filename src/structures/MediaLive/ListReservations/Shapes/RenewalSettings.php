<?php

namespace Sunaoka\Aws\Structures\MediaLive\ListReservations\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'UNAVAILABLE' $AutomaticRenewal
 * @property int<1, max> $RenewalCount
 */
class RenewalSettings extends Shape
{
    /**
     * @param array{
     *     AutomaticRenewal?: 'DISABLED'|'ENABLED'|'UNAVAILABLE',
     *     RenewalCount?: int<1, max>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
