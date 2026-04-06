<?php

namespace Sunaoka\Aws\Structures\Outposts\ListOrders\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $OutpostId
 * @property string|null $OrderId
 * @property 'OUTPOST'|'REPLACEMENT'|null $OrderType
 * @property 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR'|null $Status
 * @property array<'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED', int<1, max>>|null $LineItemCountsByStatus
 * @property \Aws\Api\DateTimeResult|null $OrderSubmissionDate
 * @property \Aws\Api\DateTimeResult|null $OrderFulfilledDate
 */
class OrderSummary extends Shape
{
    /**
     * @param array{
     *     OutpostId?: string|null,
     *     OrderId?: string|null,
     *     OrderType?: 'OUTPOST'|'REPLACEMENT'|null,
     *     Status?: 'RECEIVED'|'PENDING'|'PROCESSING'|'INSTALLING'|'FULFILLED'|'CANCELLED'|'PREPARING'|'IN_PROGRESS'|'DELIVERED'|'COMPLETED'|'ERROR'|null,
     *     LineItemCountsByStatus?: array<'PREPARING'|'BUILDING'|'SHIPPED'|'DELIVERED'|'INSTALLING'|'INSTALLED'|'ERROR'|'CANCELLED'|'REPLACED', int<1, max>>|null,
     *     OrderSubmissionDate?: \Aws\Api\DateTimeResult|null,
     *     OrderFulfilledDate?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
