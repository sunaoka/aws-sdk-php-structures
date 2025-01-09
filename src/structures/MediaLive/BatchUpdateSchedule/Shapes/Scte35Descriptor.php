<?php

namespace Sunaoka\Aws\Structures\MediaLive\BatchUpdateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property Scte35DescriptorSettings $Scte35DescriptorSettings
 */
class Scte35Descriptor extends Shape
{
    /**
     * @param array{Scte35DescriptorSettings: Scte35DescriptorSettings} $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
