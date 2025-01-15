<?php

namespace Sunaoka\Aws\Structures\WorkSpaces\CreateAccountLinkInvitation;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $TargetAccountId
 * @property string|null $ClientToken
 */
class CreateAccountLinkInvitationRequest extends Request
{
    /**
     * @param array{
     *     TargetAccountId: string,
     *     ClientToken?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
