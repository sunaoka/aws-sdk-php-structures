<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementCancellationRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementCancellationRequestId
 * @property string $agreementId
 */
class GetAgreementCancellationRequestRequest extends Request
{
    /**
     * @param array{
     *     agreementCancellationRequestId: string,
     *     agreementId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
