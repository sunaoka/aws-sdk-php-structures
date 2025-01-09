<?php

namespace Sunaoka\Aws\Structures\RAM\RejectResourceShareInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareInvitationArn
 * @property string $clientToken
 */
class RejectResourceShareInvitationRequest extends Request
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
