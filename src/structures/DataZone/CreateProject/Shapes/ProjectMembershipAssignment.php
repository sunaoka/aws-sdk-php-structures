<?php

namespace Sunaoka\Aws\Structures\DataZone\CreateProject\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Member $member
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD' $designation
 */
class ProjectMembershipAssignment extends Shape
{
    /**
     * @param array{
     *     member: Member,
     *     designation: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR'|'PROJECT_CATALOG_VIEWER'|'PROJECT_CATALOG_CONSUMER'|'PROJECT_CATALOG_STEWARD'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
