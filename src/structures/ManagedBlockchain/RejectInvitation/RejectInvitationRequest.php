<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\RejectInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $InvitationId
 */
class RejectInvitationRequest extends Request
{
    /**
     * @param array{InvitationId: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
