<?php

namespace Sunaoka\Aws\Structures\MediaTailor\UpdateProgram\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<SegmentationDescriptor>|null $SegmentationDescriptors
 */
class TimeSignalMessage extends Shape
{
    /**
     * @param array{SegmentationDescriptors?: list<SegmentationDescriptor>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
