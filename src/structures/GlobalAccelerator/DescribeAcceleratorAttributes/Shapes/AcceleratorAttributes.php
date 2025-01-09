<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\DescribeAcceleratorAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $FlowLogsEnabled
 * @property string $FlowLogsS3Bucket
 * @property string $FlowLogsS3Prefix
 */
class AcceleratorAttributes extends Shape
{
    /**
     * @param array{
     *     FlowLogsEnabled?: bool,
     *     FlowLogsS3Bucket?: string,
     *     FlowLogsS3Prefix?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
