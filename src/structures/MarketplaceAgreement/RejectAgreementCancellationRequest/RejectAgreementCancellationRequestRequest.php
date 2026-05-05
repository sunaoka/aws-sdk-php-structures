<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\RejectAgreementCancellationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property string $agreementCancellationRequestId
 * @property string $rejectionReason
 */
class RejectAgreementCancellationRequestRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     agreementCancellationRequestId: string,
     *     rejectionReason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
