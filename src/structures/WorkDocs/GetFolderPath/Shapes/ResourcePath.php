<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolderPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcePathComponent> $Components
 */
class ResourcePath extends Shape
{
    /**
     * @param array{Components?: list<ResourcePathComponent>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
