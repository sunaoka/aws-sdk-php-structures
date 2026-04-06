<?php

namespace Sunaoka\Aws\Structures\Macie\DisassociateMemberAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memberAccountId
 */
class DisassociateMemberAccountRequest extends Request
{
    /**
     * @param array{memberAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
