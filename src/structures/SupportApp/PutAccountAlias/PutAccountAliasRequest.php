<?php

namespace Sunaoka\Aws\Structures\SupportApp\PutAccountAlias;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $accountAlias
 */
class PutAccountAliasRequest extends Request
{
    /**
     * @param array{accountAlias: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
