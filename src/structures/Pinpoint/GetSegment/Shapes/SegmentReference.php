<?php

namespace Sunaoka\Aws\Structures\Pinpoint\GetSegment\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $Id
 * @property int|null $Version
 */
class SegmentReference extends Shape
{
    /**
     * @param array{
     *     Id: string,
     *     Version?: int|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
