<?php

namespace Sunaoka\Aws\Structures\Chime\GetAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class GetAccountRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
