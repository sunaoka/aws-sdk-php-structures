<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateCustomRoutingAcceleratorAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $FlowLogsEnabled
 * @property string|null $FlowLogsS3Bucket
 * @property string|null $FlowLogsS3Prefix
 */
class CustomRoutingAcceleratorAttributes extends Shape
{
    /**
     * @param array{
     *     FlowLogsEnabled?: bool|null,
     *     FlowLogsS3Bucket?: string|null,
     *     FlowLogsS3Prefix?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
