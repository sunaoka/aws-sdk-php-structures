<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $DeleteOnTermination
 * @property string $AssociatedResource
 * @property string $InstanceOwningService
 * @property string $VolumeId
 * @property string $InstanceId
 * @property string $Device
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy' $State
 * @property \Aws\Api\DateTimeResult $AttachTime
 */
class VolumeAttachment extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool,
     *     AssociatedResource?: string,
     *     InstanceOwningService?: string,
     *     VolumeId?: string,
     *     InstanceId?: string,
     *     Device?: string,
     *     State?: 'attaching'|'attached'|'detaching'|'detached'|'busy',
     *     AttachTime?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
