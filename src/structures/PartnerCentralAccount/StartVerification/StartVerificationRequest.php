<?php

namespace Sunaoka\Aws\Structures\PartnerCentralAccount\StartVerification;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $ClientToken
 * @property Shapes\VerificationDetails|null $VerificationDetails
 */
class StartVerificationRequest extends Request
{
    /**
     * @param array{
     *     ClientToken?: string|null,
     *     VerificationDetails?: Shapes\VerificationDetails|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
