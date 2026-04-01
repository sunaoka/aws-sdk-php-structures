<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\ListAgreementCancellationRequests\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $agreementCancellationRequestId
 * @property string|null $agreementId
 * @property 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|'VALIDATION_FAILED'|null $status
 * @property 'INCORRECT_TERMS_ACCEPTED'|'REPLACING_AGREEMENT'|'TEST_AGREEMENT'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'PRODUCT_DISCONTINUED'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER'|null $reasonCode
 * @property string|null $agreementType
 * @property string|null $catalog
 * @property \Aws\Api\DateTimeResult|null $createdAt
 * @property \Aws\Api\DateTimeResult|null $updatedAt
 */
class AgreementCancellationRequestSummary extends Shape
{
    /**
     * @param array{
     *     agreementCancellationRequestId?: string|null,
     *     agreementId?: string|null,
     *     status?: 'PENDING_APPROVAL'|'APPROVED'|'REJECTED'|'CANCELLED'|'VALIDATION_FAILED'|null,
     *     reasonCode?: 'INCORRECT_TERMS_ACCEPTED'|'REPLACING_AGREEMENT'|'TEST_AGREEMENT'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'PRODUCT_DISCONTINUED'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER'|null,
     *     agreementType?: string|null,
     *     catalog?: string|null,
     *     createdAt?: \Aws\Api\DateTimeResult|null,
     *     updatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
