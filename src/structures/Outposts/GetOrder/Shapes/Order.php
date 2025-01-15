<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutpostId
 * @property string|null $OrderId
 * @property 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR'|null $Status
 * @property list<LineItem>|null $LineItems
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'|null $PaymentOption
 * @property \Aws\Api\DateTimeResult|null $OrderSubmissionDate
 * @property \Aws\Api\DateTimeResult|null $OrderFulfilledDate
 * @property 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null $PaymentTerm
 * @property 'OUTPOST'|'REPLACEMENT'|null $OrderType
 */
class Order extends Shape
{
    /**
     * @param array{
     *     OutpostId?: string|null,
     *     OrderId?: string|null,
     *     Status?: 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR'|null,
     *     LineItems?: list<LineItem>|null,
     *     PaymentOption?: 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT'|null,
     *     OrderSubmissionDate?: \Aws\Api\DateTimeResult|null,
     *     OrderFulfilledDate?: \Aws\Api\DateTimeResult|null,
     *     PaymentTerm?: 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS'|null,
     *     OrderType?: 'OUTPOST'|'REPLACEMENT'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
