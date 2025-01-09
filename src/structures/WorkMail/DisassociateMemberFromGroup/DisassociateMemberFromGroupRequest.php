<?php

namespace Sunaoka\Aws\Structures\WorkMail\DisassociateMemberFromGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 * @property string $MemberId
 */
class DisassociateMemberFromGroupRequest extends Request
{
    /**
     * @param array{
     *     OrganizationId: string,
     *     GroupId: string,
     *     MemberId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
