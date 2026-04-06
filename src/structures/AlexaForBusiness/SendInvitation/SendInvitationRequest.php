<?php

namespace Sunaoka\Aws\Structures\AlexaForBusiness\SendInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $UserArn
 */
class SendInvitationRequest extends Request
{
    /**
     * @param array{UserArn?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
