<?php

namespace Sunaoka\Aws\Structures\GlobalAccelerator\UpdateAcceleratorAttributes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $FlowLogsEnabled
 * @property string|null $FlowLogsS3Bucket
 * @property string|null $FlowLogsS3Prefix
 */
class AcceleratorAttributes extends Shape
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
