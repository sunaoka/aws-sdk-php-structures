<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property 'PRIMARY'|'BILLING_GROUP'|'CUSTOM' $billingViewType
 * @property string $ownerAccountId
 * @property Expression $dataFilterExpression
 * @property \Aws\Api\DateTimeResult $createdAt
 * @property \Aws\Api\DateTimeResult $updatedAt
 */
class BillingViewElement extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     billingViewType?: 'PRIMARY'|'BILLING_GROUP'|'CUSTOM',
     *     ownerAccountId?: string,
     *     dataFilterExpression?: Expression,
     *     createdAt?: \Aws\Api\DateTimeResult,
     *     updatedAt?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
