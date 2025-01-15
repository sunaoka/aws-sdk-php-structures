<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|null $billingViewType
 * @property string|null $ownerAccountId
 * @property Expression|null $dataFilterExpression
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class BillingViewElement extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     billingViewType?: 'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|null,
     *     ownerAccountId?: string|null,
     *     dataFilterExpression?: Expression|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
