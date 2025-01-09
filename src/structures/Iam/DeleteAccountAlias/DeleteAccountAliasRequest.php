<?php

namespace Sunaoka\Aws\Structures\Iam\DeleteAccountAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAlias
 */
class DeleteAccountAliasRequest extends Request
{
    /**
     * @param array{AccountAlias: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
