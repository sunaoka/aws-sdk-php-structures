<?php

namespace Sunaoka\Aws\Structures\SSOAdmin\ListApplicationAssignmentsForPrincipal\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $ApplicationArn
 */
class ListApplicationAssignmentsFilter extends Shape
{
    /**
     * @param array{ApplicationArn?: string} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
