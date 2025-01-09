<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $containerPath
 * @property int $size
 * @property list<string> $mountOptions
 */
class Tmpfs extends Shape
{
    /**
     * @param array{
     *     containerPath: string,
     *     size: int,
     *     mountOptions?: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
