<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\AcceptAgreementCancellationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 * @property string $agreementCancellationRequestId
 */
class AcceptAgreementCancellationRequestRequest extends Request
{
    /**
     * @param array{
     *     agreementId: string,
     *     agreementCancellationRequestId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
