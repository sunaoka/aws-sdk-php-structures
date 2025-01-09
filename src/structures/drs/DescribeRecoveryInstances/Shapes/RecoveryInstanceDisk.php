<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int $bytes
 * @property string $ebsVolumeID
 * @property string $internalDeviceName
 */
class RecoveryInstanceDisk extends Shape
{
    /**
     * @param array{
     *     bytes?: int,
     *     ebsVolumeID?: string,
     *     internalDeviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
