<?php

namespace Sunaoka\Aws\Structures\GuardDuty\DeleteInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $AccountIds
 */
class DeleteInvitationsRequest extends Request
{
    /**
     * @param array{AccountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
