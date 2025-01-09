<?php

namespace Sunaoka\Aws\Structures\SecurityHub\InviteMembers;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 */
class InviteMembersRequest extends Request
{
    /**
     * @param array{AccountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
