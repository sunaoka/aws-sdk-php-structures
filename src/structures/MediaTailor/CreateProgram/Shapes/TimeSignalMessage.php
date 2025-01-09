<?php

namespace Sunaoka\Aws\Structures\MediaTailor\CreateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentationDescriptor> $SegmentationDescriptors
 */
class TimeSignalMessage extends Shape
{
    /**
     * @param array{SegmentationDescriptors?: list<SegmentationDescriptor>} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
