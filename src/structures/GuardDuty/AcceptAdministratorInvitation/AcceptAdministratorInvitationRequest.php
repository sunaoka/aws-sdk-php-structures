<?php

namespace Sunaoka\Aws\Structures\GuardDuty\AcceptAdministratorInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $AdministratorId
 * @property string $InvitationId
 */
class AcceptAdministratorInvitationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     AdministratorId: string,
     *     InvitationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
