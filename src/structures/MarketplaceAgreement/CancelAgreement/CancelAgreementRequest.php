<?php

namespace Sunaoka\Aws\Structures\MarketplaceAgreement\CancelAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementId
 */
class CancelAgreementRequest extends Request
{
    /**
     * @param array{agreementId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
