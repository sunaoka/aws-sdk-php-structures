<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 */
class GetKeyRequest extends Request
{
    /**
     * @param array{KeyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
