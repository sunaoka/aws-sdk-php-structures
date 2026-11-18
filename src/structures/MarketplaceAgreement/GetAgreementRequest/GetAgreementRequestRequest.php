<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\GetAgreementRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementRequestId
 */
class GetAgreementRequestRequest extends Request
{
    /**
     * @param array{agreementRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
