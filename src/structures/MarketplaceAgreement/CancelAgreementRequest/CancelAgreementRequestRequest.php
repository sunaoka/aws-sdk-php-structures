<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreementRequest;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementRequestId
 */
class CancelAgreementRequestRequest extends Request
{
    /**
     * @param array{agreementRequestId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
