<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\BatchCreateBillingAdjustmentRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $billingAdjustmentRequestId
 * @property string $clientToken
 */
class BatchCreateBillingAdjustmentItem extends Shape
{
    /**
     * @param array{
     *     billingAdjustmentRequestId: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
