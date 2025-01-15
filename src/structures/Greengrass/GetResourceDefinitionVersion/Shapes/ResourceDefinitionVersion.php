<?php

namespace Sunaoka\Aws\Structures\Greengrass\GetResourceDefinitionVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<Resource>|null $Resources
 */
class ResourceDefinitionVersion extends Shape
{
    /**
     * @param array{Resources?: list<Resource>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
