<?php

namespace Sunaoka\Aws\Structures\CloudFormation\CreateStackSet\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $Active
 */
class ManagedExecution extends Shape
{
    /**
     * @param array{Active?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
