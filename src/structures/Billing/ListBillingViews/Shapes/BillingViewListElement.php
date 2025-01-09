<?php

namespace Sunaoka\Aws\Structures\Billing\ListBillingViews\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $arn
 * @property string $name
 * @property string $description
 * @property string $ownerAccountId
 * @property 'PRIMARY'|'BILLING_GROUP'|'CUSTOM' $billingViewType
 */
class BillingViewListElement extends Shape
{
    /**
     * @param array{
     *     arn?: string,
     *     name?: string,
     *     description?: string,
     *     ownerAccountId?: string,
     *     billingViewType?: 'PRIMARY'|'BILLING_GROUP'|'CUSTOM'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
