<?php

namespace Sunaoka\Aws\Structures\Greengrass\CreateResourceDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Resource> $Resources
 */
class ResourceDefinitionVersion extends Shape
{
    /**
     * @param array{Resources?: list<Resource>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
