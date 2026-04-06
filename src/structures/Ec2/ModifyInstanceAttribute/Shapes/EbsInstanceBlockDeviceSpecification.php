<?php

namespace Sunaoka\Aws\Structures\Ec2\ModifyInstanceAttribute\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $DeleteOnTermination
 * @property string|null $VolumeId
 */
class EbsInstanceBlockDeviceSpecification extends Shape
{
    /**
     * @param array{
     *     DeleteOnTermination?: bool|null,
     *     VolumeId?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
