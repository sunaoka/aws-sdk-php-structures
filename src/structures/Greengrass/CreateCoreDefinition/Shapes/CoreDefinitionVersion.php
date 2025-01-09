<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateCoreDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Core> $Cores
 */
class CoreDefinitionVersion extends Shape
{
    /**
     * @param array{Cores?: list<Core>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
