<?php

namespace Sunaoka\Aws\Structures\DeviceFarm\ListOfferingTransactions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PURCHASE'|'RENEW'|'SYSTEM'|null $type
 * @property Offering|null $offering
 * @property int|null $quantity
 * @property \Aws\Api\DateTimeResult|null $effectiveOn
 */
class OfferingStatus extends Shape
{
    /**
     * @param array{
     *     type?: 'PURCHASE'|'RENEW'|'SYSTEM'|null,
     *     offering?: Offering|null,
     *     quantity?: int|null,
     *     effectiveOn?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
