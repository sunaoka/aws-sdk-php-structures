<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\PurchaseOffering\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PURCHASE'|'RENEW'|'SYSTEM' $type
 * @property Offering $offering
 * @property int $quantity
 * @property \Aws\Api\DateTimeResult $effectiveOn
 */
class OfferingStatus extends Shape
{
    /**
     * @param array{
     *     type?: 'PURCHASE'|'RENEW'|'SYSTEM',
     *     offering?: Offering,
     *     quantity?: int,
     *     effectiveOn?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
