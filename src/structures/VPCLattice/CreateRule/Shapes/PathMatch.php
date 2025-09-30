<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property PathMatchType $match
 * @property bool|null $caseSensitive
 */
class PathMatch extends Shape
{
    /**
     * @param array{
     *     match: PathMatchType,
     *     caseSensitive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
