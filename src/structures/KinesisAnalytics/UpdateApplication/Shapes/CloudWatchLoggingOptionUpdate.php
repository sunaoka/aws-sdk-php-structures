<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\UpdateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $CloudWatchLoggingOptionId
 * @property string|null $LogStreamARNUpdate
 * @property string|null $RoleARNUpdate
 */
class CloudWatchLoggingOptionUpdate extends Shape
{
    /**
     * @param array{
     *     CloudWatchLoggingOptionId: string,
     *     LogStreamARNUpdate?: string|null,
     *     RoleARNUpdate?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
