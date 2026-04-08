<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $internalDeviceName
 * @property int<0, max>|null $bytes
 * @property string|null $ebsVolumeID
 */
class RecoveryInstanceDisk extends Shape
{
    /**
     * @param array{
     *     internalDeviceName?: string|null,
     *     bytes?: int<0, max>|null,
     *     ebsVolumeID?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
