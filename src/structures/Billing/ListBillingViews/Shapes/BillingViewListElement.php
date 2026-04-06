<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $arn
 * @property string|null $name
 * @property string|null $description
 * @property string|null $ownerAccountId
 * @property 'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|null $billingViewType
 */
class BillingViewListElement extends Shape
{
    /**
     * @param array{
     *     arn?: string|null,
     *     name?: string|null,
     *     description?: string|null,
     *     ownerAccountId?: string|null,
     *     billingViewType?: 'PRIMARY'|'BILLING_GROUP'|'CUSTOM'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
