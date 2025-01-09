<?php

namespace Sunaoka\Aws\Structures\Macie2\DeleteInvitations;

use Sunaoka\Aws\Structures\Request;

/**
 * @property list<string> $accountIds
 */
class DeleteInvitationsRequest extends Request
{
    /**
     * @param array{accountIds: list<string>} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
