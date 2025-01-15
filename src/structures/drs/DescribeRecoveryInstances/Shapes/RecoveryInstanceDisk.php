<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max>|null $bytes
 * @property string|null $ebsVolumeID
 * @property string|null $internalDeviceName
 */
class RecoveryInstanceDisk extends Shape
{
    /**
     * @param array{
     *     bytes?: int<0, max>|null,
     *     ebsVolumeID?: string|null,
     *     internalDeviceName?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
