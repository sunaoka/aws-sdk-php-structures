<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<HeaderMatch> $headerMatches
 * @property string $method
 * @property PathMatch $pathMatch
 */
class HttpMatch extends Shape
{
    /**
     * @param array{
     *     headerMatches?: list<HeaderMatch>,
     *     method?: string,
     *     pathMatch?: PathMatch
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
