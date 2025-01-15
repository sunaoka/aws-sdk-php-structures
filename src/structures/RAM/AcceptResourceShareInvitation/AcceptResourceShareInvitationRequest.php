<?php

namespace Sunaoka\Aws\Structures\RAM\AcceptResourceShareInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $resourceShareInvitationArn
 * @property string|null $clientToken
 */
class AcceptResourceShareInvitationRequest extends Request
{
    /**
     * @param array{
     *     resourceShareInvitationArn: string,
     *     clientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
