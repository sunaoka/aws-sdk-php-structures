<?php

namespace Sunaoka\Aws\Structures\VPCLattice\UpdateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $name
 * @property HeaderMatchType $match
 * @property bool|null $caseSensitive
 */
class HeaderMatch extends Shape
{
    /**
     * @param array{
     *     name: string,
     *     match: HeaderMatchType,
     *     caseSensitive?: bool|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
