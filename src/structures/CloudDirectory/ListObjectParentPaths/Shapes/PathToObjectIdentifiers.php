<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\ListObjectParentPaths\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Path
 * @property list<string> $ObjectIdentifiers
 */
class PathToObjectIdentifiers extends Shape
{
    /**
     * @param array{
     *     Path?: string,
     *     ObjectIdentifiers?: list<string>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
