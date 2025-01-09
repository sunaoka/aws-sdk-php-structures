<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetPublicKeyCertificate;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 */
class GetPublicKeyCertificateRequest extends Request
{
    /**
     * @param array{KeyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
