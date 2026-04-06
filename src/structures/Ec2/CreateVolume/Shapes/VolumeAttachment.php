<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateVolume\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 * @property string|null $Device
 * @property string|null $InstanceId
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy'|null $State
 * @property string|null $VolumeId
 * @property bool|null $DeleteOnTermination
 */
class VolumeAttachment extends Shape
{
    /**
     * @param array{
     *     AttachTime?: \Aws\Api\DateTimeResult|null,
     *     Device?: string|null,
     *     InstanceId?: string|null,
     *     State?: 'attaching'|'attached'|'detaching'|'detached'|'busy'|null,
     *     VolumeId?: string|null,
     *     DeleteOnTermination?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
