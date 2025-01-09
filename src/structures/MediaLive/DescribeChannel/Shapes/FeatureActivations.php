<?php

namespace Sunaoka\Aws\Structures\MediaLive\DescribeChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED' $InputPrepareScheduleActions
 * @property 'DISABLED'|'ENABLED' $OutputStaticImageOverlayScheduleActions
 */
class FeatureActivations extends Shape
{
    /**
     * @param array{
     *     InputPrepareScheduleActions?: 'DISABLED'|'ENABLED',
     *     OutputStaticImageOverlayScheduleActions?: 'DISABLED'|'ENABLED'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
