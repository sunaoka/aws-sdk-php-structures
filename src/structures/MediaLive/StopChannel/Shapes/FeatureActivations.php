<?php

namespace Sunaoka\Aws\Structures\MediaLive\StopChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $InputPrepareScheduleActions
 * @property 'DISABLED'|'ENABLED'|null $OutputStaticImageOverlayScheduleActions
 */
class FeatureActivations extends Shape
{
    /**
     * @param array{
     *     InputPrepareScheduleActions?: 'DISABLED'|'ENABLED'|null,
     *     OutputStaticImageOverlayScheduleActions?: 'DISABLED'|'ENABLED'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
