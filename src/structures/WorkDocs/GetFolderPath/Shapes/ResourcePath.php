<?php

namespace Sunaoka\Aws\Structures\WorkDocs\GetFolderPath\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<ResourcePathComponent>|null $Components
 */
class ResourcePath extends Shape
{
    /**
     * @param array{Components?: list<ResourcePathComponent>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
