<?php

namespace Sunaoka\Aws\Structures\Billing\GetBillingView\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property 'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|'BILLING_TRANSFER'|'BILLING_TRANSFER_SHOWBACK'|null $billingViewType
 * @property string|null $ownerAccountId
 * @property string|null $sourceAccountId
 * @property Expression|null $dataFilterExpression
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 * @property int|null $derivedViewCount
 * @property int|null $sourceViewCount
 * @property \Aws\Api\DateTimeResult|null $viewDefinitionLastUpdatedAt
 * @property BillingViewHealthStatus|null $healthStatus
 */
class BillingViewElement extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     billingViewType?: 'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|'BILLING_TRANSFER'|'BILLING_TRANSFER_SHOWBACK'|null,
     *     ownerAccountId?: string|null,
     *     sourceAccountId?: string|null,
     *     dataFilterExpression?: Expression|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null,
     *     derivedViewCount?: int|null,
     *     sourceViewCount?: int|null,
     *     viewDefinitionLastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     healthStatus?: BillingViewHealthStatus|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
