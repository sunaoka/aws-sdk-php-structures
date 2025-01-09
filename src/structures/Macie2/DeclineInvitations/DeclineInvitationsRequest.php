<?php

namespace Sunaoka\Aws\Structures\Macie2\DeclineInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 */
class DeclineInvitationsRequest extends Request
{
    /**
     * @param array{accountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
