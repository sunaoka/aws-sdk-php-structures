<?php

namespace Sunaoka\Aws\Structures\SecurityHub\DisassociateMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 */
class DisassociateMembersRequest extends Request
{
    /**
     * @param array{AccountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
