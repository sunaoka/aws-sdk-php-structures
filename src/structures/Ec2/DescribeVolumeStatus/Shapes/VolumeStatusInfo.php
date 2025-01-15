<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VolumeStatusDetails>|null $Details
 * @property 'ok'|'impaired'|'insufficient-data'|null $Status
 */
class VolumeStatusInfo extends Shape
{
    /**
     * @param array{
     *     Details?: list<VolumeStatusDetails>|null,
     *     Status?: 'ok'|'impaired'|'insufficient-data'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
