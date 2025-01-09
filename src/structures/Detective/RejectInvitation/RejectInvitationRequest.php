<?php

namespace Sunaoka\Aws\Structures\Detective\RejectInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 */
class RejectInvitationRequest extends Request
{
    /**
     * @param array{GraphArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
