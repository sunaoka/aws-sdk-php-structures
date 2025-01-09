<?php

namespace Sunaoka\Aws\Structures\WorkMail\AssociateMemberToGroup;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $OrganizationId
 * @property string $GroupId
 * @property string $MemberId
 */
class AssociateMemberToGroupRequest extends Request
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
