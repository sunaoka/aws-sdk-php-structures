<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLoggingOptionId
 * @property string $LogStreamARNUpdate
 * @property string $RoleARNUpdate
 */
class CloudWatchLoggingOptionUpdate extends Shape
{
    /**
     * @param array{
     *     CloudWatchLoggingOptionId: string,
     *     LogStreamARNUpdate?: string,
     *     RoleARNUpdate?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
