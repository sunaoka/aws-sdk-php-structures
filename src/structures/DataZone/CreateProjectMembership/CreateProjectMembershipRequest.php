<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $domainIdentifier
 * @property string $projectIdentifier
 * @property Shapes\Member $member
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD' $designation
 */
class CreateProjectMembershipRequest extends Request
{
    /**
     * @param array{
     *     domainIdentifier: string,
     *     projectIdentifier: string,
     *     member: Shapes\Member,
     *     designation: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
