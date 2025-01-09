<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\DeleteAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 */
class DeleteAliasRequest extends Request
{
    /**
     * @param array{AliasName: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
