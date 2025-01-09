<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property \Aws\Api\DateTimeResult $AttachTime
 * @property bool $DeleteOnTermination
 * @property 'attaching'|'attached'|'detaching'|'detached' $Status
 * @property string $VolumeId
 * @property string $AssociatedResource
 * @property string $VolumeOwnerId
 * @property OperatorResponse $Operator
 */
class EbsInstanceBlockDevice extends Shape
{
    /**
     * @param array{
     *     AttachTime?: \Aws\Api\DateTimeResult,
     *     DeleteOnTermination?: bool,
     *     Status?: 'attaching'|'attached'|'detaching'|'detached',
     *     VolumeId?: string,
     *     AssociatedResource?: string,
     *     VolumeOwnerId?: string,
     *     Operator?: OperatorResponse
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
