<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SendAgreementCancellationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property 'INCORRECT_TERMS_ACCEPTED'|'REPLACING_AGREEMENT'|'TEST_AGREEMENT'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'PRODUCT_DISCONTINUED'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER' $reasonCode
 * @property string|null $clientToken
 * @property string|null $description
 */
class SendAgreementCancellationRequestRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     reasonCode: 'INCORRECT_TERMS_ACCEPTED'|'REPLACING_AGREEMENT'|'TEST_AGREEMENT'|'ALTERNATIVE_PROCUREMENT_CHANNEL'|'PRODUCT_DISCONTINUED'|'UNINTENDED_RENEWAL'|'BUYER_DISSATISFACTION'|'OTHER',
     *     clientToken?: string|null,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
