<?php

namespace Sunaoka\Aws\Structures\Macie\AssociateMemberAccount;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $memberAccountId
 */
class AssociateMemberAccountRequest extends Request
{
    /**
     * @param array{memberAccountId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
