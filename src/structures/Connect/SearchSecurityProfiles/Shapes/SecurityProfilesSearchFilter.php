<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneTagFilter $TagFilter
 */
class SecurityProfilesSearchFilter extends Shape
{
    /**
     * @param array{TagFilter?: ControlPlaneTagFilter} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
