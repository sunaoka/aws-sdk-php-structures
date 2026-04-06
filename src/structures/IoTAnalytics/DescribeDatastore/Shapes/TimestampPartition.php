<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\DescribeDatastore\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $attributeName
 * @property string|null $timestampFormat
 */
class TimestampPartition extends Shape
{
    /**
     * @param array{
     *     attributeName: string,
     *     timestampFormat?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
