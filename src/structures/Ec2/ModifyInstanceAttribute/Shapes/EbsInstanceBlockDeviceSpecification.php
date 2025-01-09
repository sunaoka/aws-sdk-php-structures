<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $VolumeId
 * @property bool $DeleteOnTermination
 */
class EbsInstanceBlockDeviceSpecification extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string,
     *     DeleteOnTermination?: bool
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
