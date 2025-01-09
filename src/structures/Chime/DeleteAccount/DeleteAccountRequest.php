<?php

namespace Sunaoka\Aws\Structures\Chime\DeleteAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AccountId
 */
class DeleteAccountRequest extends Request
{
    /**
     * @param array{AccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
