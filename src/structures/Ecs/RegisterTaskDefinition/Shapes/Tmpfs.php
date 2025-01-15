<?php

namespace Sunaoka\Aws\Structures\Ecs\RegisterTaskDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerPath
 * @property int $size
 * @property list<string>|null $mountOptions
 */
class Tmpfs extends Shape
{
    /**
     * @param array{
     *     containerPath: string,
     *     size: int,
     *     mountOptions?: list<string>|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
