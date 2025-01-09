<?php

namespace Sunaoka\Aws\Structures\CognitoIdentityProvider\GetSigningCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $UserPoolId
 */
class GetSigningCertificateRequest extends Request
{
    /**
     * @param array{UserPoolId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
