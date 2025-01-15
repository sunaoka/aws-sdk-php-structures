<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HeaderMatch>|null $headerMatches
 * @property string|null $method
 * @property PathMatch|null $pathMatch
 */
class HttpMatch extends Shape
{
    /**
     * @param array{
     *     headerMatches?: list<HeaderMatch>|null,
     *     method?: string|null,
     *     pathMatch?: PathMatch|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
