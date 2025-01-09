<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\RestoreKey;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 */
class RestoreKeyRequest extends Request
{
    /**
     * @param array{KeyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
