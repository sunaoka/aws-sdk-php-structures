<?php

namespace Sunaoka\Aws\Structures\drs\DescribeRecoveryInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property int<0, max> $bytes
 * @property string $ebsVolumeID
 * @property string $internalDeviceName
 */
class RecoveryInstanceDisk extends Shape
{
    /**
     * @param array{
     *     bytes?: int<0, max>,
     *     ebsVolumeID?: string,
     *     internalDeviceName?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
