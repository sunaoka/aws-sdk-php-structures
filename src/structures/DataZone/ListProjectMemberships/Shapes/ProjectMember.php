<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD' $designation
 * @property MemberDetails $memberDetails
 */
class ProjectMember extends Shape
{
    /**
     * @param array{
     *     designation: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD',
     *     memberDetails: MemberDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
