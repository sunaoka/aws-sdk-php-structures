<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $AllowNonRestoredState
 */
class FlinkRunConfiguration extends Shape
{
    /**
     * @param array{AllowNonRestoredState?: bool} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
