<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\RejectAccountLinkInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LinkId
 * @property string $ClientToken
 */
class RejectAccountLinkInvitationRequest extends Request
{
    /**
     * @param array{
     *     LinkId: string,
     *     ClientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
