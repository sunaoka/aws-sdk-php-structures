<?php

namespace Sunaoka\Aws\Structures\MediaLive\DeleteReservation\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'UNAVAILABLE' $AutomaticRenewal
 * @property int $RenewalCount
 */
class RenewalSettings extends Shape
{
    /**
     * @param array{
     *     AutomaticRenewal?: 'DISABLED'|'ENABLED'|'UNAVAILABLE',
     *     RenewalCount?: int
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
