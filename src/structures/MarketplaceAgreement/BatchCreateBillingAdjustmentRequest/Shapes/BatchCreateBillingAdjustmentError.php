<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\BatchCreateBillingAdjustmentRequest\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CONFLICT_EXCEPTION'|'VALIDATION_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'INTERNAL_FAILURE' $code
 * @property string $message
 * @property string $clientToken
 */
class BatchCreateBillingAdjustmentError extends Shape
{
    /**
     * @param array{
     *     code: 'CONFLICT_EXCEPTION'|'VALIDATION_EXCEPTION'|'RESOURCE_NOT_FOUND_EXCEPTION'|'INTERNAL_FAILURE',
     *     message: string,
     *     clientToken: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
