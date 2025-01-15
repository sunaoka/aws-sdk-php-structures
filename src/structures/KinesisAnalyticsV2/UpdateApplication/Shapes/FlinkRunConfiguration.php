<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $AllowNonRestoredState
 */
class FlinkRunConfiguration extends Shape
{
    /**
     * @param array{AllowNonRestoredState?: bool|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
