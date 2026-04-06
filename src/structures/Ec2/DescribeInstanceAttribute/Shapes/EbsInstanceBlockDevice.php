<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult|null $AttachTime
 * @property bool|null $DeleteOnTermination
 * @property 'attaching'|'attached'|'detaching'|'detached'|null $Status
 * @property string|null $VolumeId
 * @property string|null $AssociatedResource
 * @property string|null $VolumeOwnerId
 * @property OperatorResponse|null $Operator
 */
class EbsInstanceBlockDevice extends Shape
{
    /**
     * @param array{
     *     AttachTime?: \Aws\Api\DateTimeResult|null,
     *     DeleteOnTermination?: bool|null,
     *     Status?: 'attaching'|'attached'|'detaching'|'detached'|null,
     *     VolumeId?: string|null,
     *     AssociatedResource?: string|null,
     *     VolumeOwnerId?: string|null,
     *     Operator?: OperatorResponse|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
