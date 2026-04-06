<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentsForPrincipal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $AccountId
 */
class ListAccountAssignmentsFilter extends Shape
{
    /**
     * @param array{AccountId?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
