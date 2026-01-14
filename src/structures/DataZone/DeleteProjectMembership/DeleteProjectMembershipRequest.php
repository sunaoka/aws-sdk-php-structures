<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteProjectMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $projectIdentifier
 * @property Shapes\Member $member
 */
class DeleteProjectMembershipRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     projectIdentifier: string,
     *     member: Shapes\Member
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
