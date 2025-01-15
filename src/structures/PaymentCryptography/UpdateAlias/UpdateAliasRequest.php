<?php

namespace Sunaoka\Aws\Structures\PaymentCryptography\UpdateAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AliasName
 * @property string|null $KeyArn
 */
class UpdateAliasRequest extends Request
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
