<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreementCancellationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property string $agreementCancellationRequestId
 * @property string $cancellationReason
 */
class CancelAgreementCancellationRequestRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     agreementCancellationRequestId: string,
     *     cancellationReason: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
