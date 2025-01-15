<?php

namespace Sunaoka\Aws\Structures\KinesisAnalyticsV2\DeleteApplicationCloudWatchLoggingOption\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $CloudWatchLoggingOptionId
 * @property string $LogStreamARN
 * @property string|null $RoleARN
 */
class CloudWatchLoggingOptionDescription extends Shape
{
    /**
     * @param array{
     *     CloudWatchLoggingOptionId?: string|null,
     *     LogStreamARN: string,
     *     RoleARN?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
