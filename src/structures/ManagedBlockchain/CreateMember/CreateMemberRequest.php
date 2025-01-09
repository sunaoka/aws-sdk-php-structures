<?php

namespace Sunaoka\Aws\Structures\ManagedBlockchain\CreateMember;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $ClientRequestToken
 * @property string $InvitationId
 * @property string $NetworkId
 * @property Shapes\MemberConfiguration $MemberConfiguration
 */
class CreateMemberRequest extends Request
{
    /**
     * @param array{
     *     ClientRequestToken: string,
     *     InvitationId: string,
     *     NetworkId: string,
     *     MemberConfiguration: Shapes\MemberConfiguration
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
