<?php

namespace Sunaoka\Aws\Structures\GuardDuty\AcceptInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $DetectorId
 * @property string $MasterId
 * @property string $InvitationId
 */
class AcceptInvitationRequest extends Request
{
    /**
     * @param array{
     *     DetectorId: string,
     *     MasterId: string,
     *     InvitationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
