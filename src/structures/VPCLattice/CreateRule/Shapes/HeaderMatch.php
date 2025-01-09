<?php

namespace Sunaoka\Aws\Structures\VPCLattice\CreateRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $caseSensitive
 * @property HeaderMatchType $match
 * @property string $name
 */
class HeaderMatch extends Shape
{
    /**
     * @param array{
     *     caseSensitive?: bool,
     *     match: HeaderMatchType,
     *     name: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
