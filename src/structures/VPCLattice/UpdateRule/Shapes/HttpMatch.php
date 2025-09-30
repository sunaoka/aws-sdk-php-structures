<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $method
 * @property PathMatch|null $pathMatch
 * @property list<HeaderMatch>|null $headerMatches
 */
class HttpMatch extends Shape
{
    /**
     * @param array{
     *     method?: string|null,
     *     pathMatch?: PathMatch|null,
     *     headerMatches?: list<HeaderMatch>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
