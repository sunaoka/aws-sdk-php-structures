<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\StopKeyUsage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $KeyIdentifier
 */
class StopKeyUsageRequest extends Request
{
    /**
     * @param array{KeyIdentifier: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
