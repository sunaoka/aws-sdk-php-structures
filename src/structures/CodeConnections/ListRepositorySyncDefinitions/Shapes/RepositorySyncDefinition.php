<?php

namespace Sunaoka\Aws\Structures\CodeConnections\ListRepositorySyncDefinitions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Branch
 * @property string $Directory
 * @property string $Parent
 * @property string $Target
 */
class RepositorySyncDefinition extends Shape
{
    /**
     * @param array{
     *     Branch: string,
     *     Directory: string,
     *     Parent: string,
     *     Target: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
