<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property MemberDetails $memberDetails
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD' $designation
 */
class ProjectMember extends Shape
{
    /**
     * @param array{
     *     memberDetails: MemberDetails,
     *     designation: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
