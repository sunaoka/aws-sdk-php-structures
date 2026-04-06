<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProjectMembership;

use Sunaoka\Aws\Structures\Request;

/**
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD' $designation
 * @property string $domainIdentifier
 * @property Shapes\Member $member
 * @property string $projectIdentifier
 */
class CreateProjectMembershipRequest extends Request
{
    /**
     * @param array{
     *     designation: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD',
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
