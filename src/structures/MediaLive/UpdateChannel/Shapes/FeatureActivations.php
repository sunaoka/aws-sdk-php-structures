<?php

namespace Sunaoka\Aws\Structures\MediaLive\UpdateChannel\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'DISABLED'|'ENABLED'|null $InputPrepareScheduleActions
 */
class FeatureActivations extends Shape
{
    /**
     * @param array{InputPrepareScheduleActions?: 'DISABLED'|'ENABLED'|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
