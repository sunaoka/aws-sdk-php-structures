<?php

namespace Sunaoka\Aws\Structures\Detective\AcceptInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $GraphArn
 */
class AcceptInvitationRequest extends Request
{
    /**
     * @param array{GraphArn: string} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
