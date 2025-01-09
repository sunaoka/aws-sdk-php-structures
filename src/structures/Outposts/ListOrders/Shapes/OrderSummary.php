<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $OutpostId
 * @property string $OrderId
 * @property 'OUTPOST'|'REPLACEMENT' $OrderType
 * @property 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR' $Status
 * @property array<'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED', int<1, max>> $LineItemCountsByStatus
 * @property \Aws\Api\DateTimeResult $OrderSubmissionDate
 * @property \Aws\Api\DateTimeResult $OrderFulfilledDate
 */
class OrderSummary extends Shape
{
    /**
     * @param array{
     *     OutpostId?: string,
     *     OrderId?: string,
     *     OrderType?: 'OUTPOST'|'REPLACEMENT',
     *     Status?: 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR',
     *     LineItemCountsByStatus?: array<'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED', int<1, max>>,
     *     OrderSubmissionDate?: \Aws\Api\DateTimeResult,
     *     OrderFulfilledDate?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
