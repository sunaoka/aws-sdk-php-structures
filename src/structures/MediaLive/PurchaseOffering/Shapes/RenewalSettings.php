<?php

namespace Sunaoka\Aws\Structures\MediaLive\PurchaseOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|'UNAVAILABLE'|null $AutomaticRenewal
 * @property int|null $RenewalCount
 */
class RenewalSettings extends Shape
{
    /**
     * @param array{
     *     AutomaticRenewal?: 'DISABLED'|'ENABLED'|'UNAVAILABLE'|null,
     *     RenewalCount?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
