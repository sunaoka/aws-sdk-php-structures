<?php

namespace Sunaoka\Aws\Structures\Proton\ListRepositorySyncDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $branch
 * @property string $directory
 * @property string $parent
 * @property string $target
 */
class RepositorySyncDefinition extends Shape
{
    /**
     * @param array{
     *     branch: string,
     *     directory: string,
     *     parent: string,
     *     target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
