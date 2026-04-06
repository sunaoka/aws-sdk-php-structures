<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $caseSensitive
 * @property PathMatchType $match
 */
class PathMatch extends Shape
{
    /**
     * @param array{
     *     caseSensitive?: bool|null,
     *     match: PathMatchType
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
