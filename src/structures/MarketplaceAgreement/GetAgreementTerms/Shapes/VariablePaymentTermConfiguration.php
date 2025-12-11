<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementTerms\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AUTO_APPROVE_ON_EXPIRATION'|'WAIT_FOR_APPROVAL' $paymentRequestApprovalStrategy
 * @property string|null $expirationDuration
 */
class VariablePaymentTermConfiguration extends Shape
{
    /**
     * @param array{
     *     paymentRequestApprovalStrategy: 'AUTO_APPROVE_ON_EXPIRATION'|'WAIT_FOR_APPROVAL',
     *     expirationDuration?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
