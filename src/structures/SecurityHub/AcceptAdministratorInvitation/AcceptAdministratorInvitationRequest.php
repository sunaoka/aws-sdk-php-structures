<?php

namespace Sunaoka\Aws\Structures\SecurityHub\AcceptAdministratorInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $AdministratorId
 * @property string $InvitationId
 */
class AcceptAdministratorInvitationRequest extends Request
{
    /**
     * @param array{
     *     AdministratorId: string,
     *     InvitationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
