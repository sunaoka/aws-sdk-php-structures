<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeName
 * @property string $timestampFormat
 */
class TimestampPartition extends Shape
{
    /**
     * @param array{
     *     attributeName: string,
     *     timestampFormat?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
