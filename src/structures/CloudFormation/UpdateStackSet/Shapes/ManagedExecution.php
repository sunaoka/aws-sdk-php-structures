<?php

namespace Sunaoka\Aws\Structures\CloudFormation\UpdateStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $Active
 */
class ManagedExecution extends Shape
{
    /**
     * @param array{Active?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
