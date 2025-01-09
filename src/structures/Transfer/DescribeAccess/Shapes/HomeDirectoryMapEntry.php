<?php

namespace Sunaoka\Aws\Structures\Transfer\DescribeAccess\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Entry
 * @property string $Target
 * @property 'FILE'|'DIRECTORY' $Type
 */
class HomeDirectoryMapEntry extends Shape
{
    /**
     * @param array{
     *     Entry: string,
     *     Target: string,
     *     Type?: 'FILE'|'DIRECTORY'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
