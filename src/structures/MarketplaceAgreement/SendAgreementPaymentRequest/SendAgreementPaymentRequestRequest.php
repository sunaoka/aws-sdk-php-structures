<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\SendAgreementPaymentRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $clientToken
 * @property string $agreementId
 * @property string $termId
 * @property string $name
 * @property string $chargeAmount
 * @property string|null $description
 */
class SendAgreementPaymentRequestRequest extends Request
{
    /**
     * @param array{
     *     clientToken?: string|null,
     *     agreementId: string,
     *     termId: string,
     *     name: string,
     *     chargeAmount: string,
     *     description?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
