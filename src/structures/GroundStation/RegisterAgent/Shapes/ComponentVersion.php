<?php

namespace Sunaoka\Aws\Structures\GroundStation\RegisterAgent\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $componentType
 * @property list<string> $versions
 */
class ComponentVersion extends Shape
{
    /**
     * @param array{
     *     componentType: string,
     *     versions: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
