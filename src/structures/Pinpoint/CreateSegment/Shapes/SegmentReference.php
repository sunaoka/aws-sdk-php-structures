<?php

namespace Sunaoka\Aws\Structures\Pinpoint\CreateSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int $Version
 */
class SegmentReference extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Version?: int
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
