<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListVirtualInterfaceRoutes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'seq'|'set'|null $pathType
 * @property list<int>|null $path
 */
class AsPathSegment extends Shape
{
    /**
     * @param array{
     *     pathType?: 'seq'|'set'|null,
     *     path?: list<int>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
