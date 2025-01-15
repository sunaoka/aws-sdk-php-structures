<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $VolumeId
 * @property bool|null $DeleteOnTermination
 */
class EbsInstanceBlockDeviceSpecification extends Shape
{
    /**
     * @param array{
     *     VolumeId?: string|null,
     *     DeleteOnTermination?: bool|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
