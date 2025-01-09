<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DescribeApplicationVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLoggingOptionId
 * @property string $LogStreamARN
 * @property string $RoleARN
 */
class CloudWatchLoggingOptionDescription extends Shape
{
    /**
     * @param array{
     *     CloudWatchLoggingOptionId?: string,
     *     LogStreamARN: string,
     *     RoleARN?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
