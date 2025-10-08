<?php

namespace Sunaoka\Aws\Structures\DirectoryService\UpdateDirectorySetup\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'Small'|'Large'|null $DirectorySize
 */
class DirectorySizeUpdateSettings extends Shape
{
    /**
     * @param array{DirectorySize?: 'Small'|'Large'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
