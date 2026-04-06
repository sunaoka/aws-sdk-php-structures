<?php

namespace Sunaoka\Aws\Structures\VPCLattice\BatchUpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $caseSensitive
 * @property HeaderMatchType $match
 * @property string $name
 */
class HeaderMatch extends Shape
{
    /**
     * @param array{
     *     caseSensitive?: bool|null,
     *     match: HeaderMatchType,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
