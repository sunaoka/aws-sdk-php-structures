<?php

namespace Sunaoka\Aws\Structures\Iam\CreateAccountAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountAlias
 */
class CreateAccountAliasRequest extends Request
{
    /**
     * @param array{AccountAlias: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
