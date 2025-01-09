<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\DescribeDeliveries\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $suffixPath
 * @property bool $enableHiveCompatiblePath
 */
class S3DeliveryConfiguration extends Shape
{
    /**
     * @param array{
     *     suffixPath?: string,
     *     enableHiveCompatiblePath?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
