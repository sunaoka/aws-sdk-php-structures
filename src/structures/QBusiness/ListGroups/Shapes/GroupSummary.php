<?php

namespace Sunaoka\Aws\Structures\QBusiness\ListGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $groupName
 */
class GroupSummary extends Shape
{
    /**
     * @param array{groupName?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
