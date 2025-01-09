<?php

namespace Sunaoka\Aws\Structures\RAM\AcceptResourceShareInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareInvitationArn
 * @property string $clientToken
 */
class AcceptResourceShareInvitationRequest extends Request
{
    /**
     * @param array{
     *     resourceShareInvitationArn: string,
     *     clientToken?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
