<?php

namespace Sunaoka\Aws\Structures\DataZone\DeleteProjectMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property Shapes\Member $member
 * @property string $projectIdentifier
 */
class DeleteProjectMembershipRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     member: Shapes\Member,
     *     projectIdentifier: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
