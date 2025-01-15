<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\CreateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 * @property string|null $KeyArn
 */
class CreateAliasRequest extends Request
{
    /**
     * @param array{
     *     AliasName: string,
     *     KeyArn?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
