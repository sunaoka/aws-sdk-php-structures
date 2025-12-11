<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\GetVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'BUSINESS_VERIFICATION'|'REGISTRANT_VERIFICATION' $VerificationType
 */
class GetVerificationRequest extends Request
{
    /**
     * @param array{VerificationType: 'BUSINESS_VERIFICATION'|'REGISTRANT_VERIFICATION'} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
