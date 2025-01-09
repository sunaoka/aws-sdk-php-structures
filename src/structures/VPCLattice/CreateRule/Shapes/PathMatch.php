<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $caseSensitive
 * @property PathMatchType $match
 */
class PathMatch extends Shape
{
    /**
     * @param array{
     *     caseSensitive?: bool,
     *     match: PathMatchType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
