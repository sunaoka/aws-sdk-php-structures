<?php

namespace Sunaoka\Aws\Structures\CloudDirectory\BatchRead\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Path
 * @property list<string>|null $ObjectIdentifiers
 */
class PathToObjectIdentifiers extends Shape
{
    /**
     * @param array{
     *     Path?: string|null,
     *     ObjectIdentifiers?: list<string>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
