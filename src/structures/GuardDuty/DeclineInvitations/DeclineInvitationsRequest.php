<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeclineInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 */
class DeclineInvitationsRequest extends Request
{
    /**
     * @param array{AccountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
