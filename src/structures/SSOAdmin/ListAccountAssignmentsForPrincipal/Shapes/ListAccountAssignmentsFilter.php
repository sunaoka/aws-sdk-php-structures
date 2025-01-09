<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListAccountAssignmentsForPrincipal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $AccountId
 */
class ListAccountAssignmentsFilter extends Shape
{
    /**
     * @param array{AccountId?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
