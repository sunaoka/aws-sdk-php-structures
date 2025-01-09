<?php

namespace Sunaoka\Aws\Structures\KinesisAnalytics\CreateApplication\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $LogStreamARN
 * @property string $RoleARN
 */
class CloudWatchLoggingOption extends Shape
{
    /**
     * @param array{
     *     LogStreamARN: string,
     *     RoleARN: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
