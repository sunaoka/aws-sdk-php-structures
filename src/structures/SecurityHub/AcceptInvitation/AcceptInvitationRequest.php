<?php

namespace Sunaoka\Aws\Structures\SecurityHub\AcceptInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $MasterId
 * @property string $InvitationId
 */
class AcceptInvitationRequest extends Request
{
    /**
     * @param array{
     *     MasterId: string,
     *     InvitationId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
