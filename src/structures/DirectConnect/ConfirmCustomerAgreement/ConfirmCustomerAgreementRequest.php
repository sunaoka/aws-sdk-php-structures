<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ConfirmCustomerAgreement;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $agreementName
 */
class ConfirmCustomerAgreementRequest extends Request
{
    /**
     * @param array{agreementName?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
