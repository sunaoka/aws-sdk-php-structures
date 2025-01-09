<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\UpdateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 * @property string $KeyArn
 */
class UpdateAliasRequest extends Request
{
    /**
     * @param array{
     *     AliasName: string,
     *     KeyArn?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
