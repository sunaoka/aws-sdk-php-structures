<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\AcceptAccountLinkInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $LinkId
 * @property string|null $ClientToken
 */
class AcceptAccountLinkInvitationRequest extends Request
{
    /**
     * @param array{
     *     LinkId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
