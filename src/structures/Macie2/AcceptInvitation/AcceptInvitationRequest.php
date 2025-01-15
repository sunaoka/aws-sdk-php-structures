<?php

namespace Sunaoka\Aws\Structures\Macie2\AcceptInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $administratorAccountId
 * @property string $invitationId
 * @property string|null $masterAccount
 */
class AcceptInvitationRequest extends Request
{
    /**
     * @param array{
     *     administratorAccountId?: string|null,
     *     invitationId: string,
     *     masterAccount?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
