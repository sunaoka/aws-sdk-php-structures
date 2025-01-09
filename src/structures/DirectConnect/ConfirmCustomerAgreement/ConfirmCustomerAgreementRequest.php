<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmCustomerAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $agreementName
 */
class ConfirmCustomerAgreementRequest extends Request
{
    /**
     * @param array{agreementName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
