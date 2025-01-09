<?php

namespace Sunaoka\Aws\Structures\WellArchitected\UpdateShareInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ShareInvitationId
 * @property 'ACCEPT'|'REJECT' $ShareInvitationAction
 */
class UpdateShareInvitationRequest extends Request
{
    /**
     * @param array{
     *     ShareInvitationId: string,
     *     ShareInvitationAction: 'ACCEPT'|'REJECT'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
