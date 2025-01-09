<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\StartApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'NOW'|'TRIM_HORIZON'|'LAST_STOPPED_POINT' $InputStartingPosition
 */
class InputStartingPositionConfiguration extends Shape
{
    /**
     * @param array{InputStartingPosition?: 'NOW'|'TRIM_HORIZON'|'LAST_STOPPED_POINT'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
