<?php

namespace Sunaoka\Aws\Structures\Connect\SearchSecurityProfiles\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property ControlPlaneTagFilter|null $TagFilter
 */
class SecurityProfilesSearchFilter extends Shape
{
    /**
     * @param array{TagFilter?: ControlPlaneTagFilter|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
