<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $attachTime
 * @property bool|null $deleteOnTermination
 * @property 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|null $status
 * @property string|null $volumeId
 */
class EbsInstanceBlockDevice extends Shape
{
    /**
     * @param array{
     *     attachTime?: \Aws\Api\DateTimeResult|null,
     *     deleteOnTermination?: bool|null,
     *     status?: 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED'|null,
     *     volumeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
