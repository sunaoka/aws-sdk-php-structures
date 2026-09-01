<?php

namespace Sunaoka\Aws\Structures\CustomerProfiles\GetStreamForSegments\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $SegmentName
 * @property 'STARTING'|'RUNNING'|'STOPPED'|'FAILED'|null $Status
 * @property string|null $Message
 */
class AssociatedSegment extends Shape
{
    /**
     * @param array{
     *     SegmentName?: string|null,
     *     Status?: 'STARTING'|'RUNNING'|'STOPPED'|'FAILED'|null,
     *     Message?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
