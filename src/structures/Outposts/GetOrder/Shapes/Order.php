<?php

namespace Sunaoka\Aws\Structures\Outposts\GetOrder\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutpostId
 * @property string $OrderId
 * @property 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR' $Status
 * @property list<LineItem> $LineItems
 * @property 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT' $PaymentOption
 * @property \Aws\Api\DateTimeResult $OrderSubmissionDate
 * @property \Aws\Api\DateTimeResult $OrderFulfilledDate
 * @property 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS' $PaymentTerm
 * @property 'OUTPOST'|'REPLACEMENT' $OrderType
 */
class Order extends Shape
{
    /**
     * @param array{
     *     OutpostId?: string,
     *     OrderId?: string,
     *     Status?: 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR',
     *     LineItems?: list<LineItem>,
     *     PaymentOption?: 'ALL_UPFRONT'|'NO_UPFRONT'|'PARTIAL_UPFRONT',
     *     OrderSubmissionDate?: \Aws\Api\DateTimeResult,
     *     OrderFulfilledDate?: \Aws\Api\DateTimeResult,
     *     PaymentTerm?: 'THREE_YEARS'|'ONE_YEAR'|'FIVE_YEARS',
     *     OrderType?: 'OUTPOST'|'REPLACEMENT'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
