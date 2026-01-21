<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DeleteOnTermination
 * @property string|null $AssociatedResource
 * @property string|null $InstanceOwningService
 * @property int|null $EbsCardIndex
 * @property string|null $VolumeId
 * @property string|null $InstanceId
 * @property string|null $Device
 * @property 'attaching'|'attached'|'detaching'|'detached'|'busy'|null $State
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 */
class VolumeAttachment extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool|null,
     *     AssociatedResource?: string|null,
     *     InstanceOwningService?: string|null,
     *     EbsCardIndex?: int|null,
     *     VolumeId?: string|null,
     *     InstanceId?: string|null,
     *     Device?: string|null,
     *     State?: 'attaching'|'attached'|'detaching'|'detached'|'busy'|null,
     *     AttachTime?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
