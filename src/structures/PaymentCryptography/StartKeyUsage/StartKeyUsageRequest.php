<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\StartKeyUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 */
class StartKeyUsageRequest extends Request
{
    /**
     * @param array{KeyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
