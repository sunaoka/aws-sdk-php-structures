<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLoggingOptionId
 * @property string $LogStreamARNUpdate
 */
class CloudWatchLoggingOptionUpdate extends Shape
{
    /**
     * @param array{
     *     CloudWatchLoggingOptionId: string,
     *     LogStreamARNUpdate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
