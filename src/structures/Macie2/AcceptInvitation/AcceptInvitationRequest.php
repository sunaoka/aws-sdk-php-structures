<?php

namespace Sunaoka\Aws\Structures\Macie2\AcceptInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $administratorAccountId
 * @property string $invitationId
 * @property string $masterAccount
 */
class AcceptInvitationRequest extends Request
{
    /**
     * @param array{
     *     administratorAccountId?: string,
     *     invitationId: string,
     *     masterAccount?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
