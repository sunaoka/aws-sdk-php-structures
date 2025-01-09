<?php

namespace Sunaoka\Aws\Structures\SnowDeviceManagement\DescribeDeviceEc2Instances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $attachTime
 * @property bool $deleteOnTermination
 * @property 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED' $status
 * @property string $volumeId
 */
class EbsInstanceBlockDevice extends Shape
{
    /**
     * @param array{
     *     attachTime?: \Aws\Api\DateTimeResult,
     *     deleteOnTermination?: bool,
     *     status?: 'ATTACHING'|'ATTACHED'|'DETACHING'|'DETACHED',
     *     volumeId?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
