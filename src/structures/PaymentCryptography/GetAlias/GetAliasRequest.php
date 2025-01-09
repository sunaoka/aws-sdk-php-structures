<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\GetAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 */
class GetAliasRequest extends Request
{
    /**
     * @param array{AliasName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
