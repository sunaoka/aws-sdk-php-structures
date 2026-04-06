<?php

namespace Sunaoka\Aws\Structures\DataZone\ListProjectMemberships\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR' $designation
 * @property MemberDetails $memberDetails
 */
class ProjectMember extends Shape
{
    /**
     * @param array{
     *     designation: 'PROJECT_OWNER'|'PROJECT_CONTRIBUTOR',
     *     memberDetails: MemberDetails
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
