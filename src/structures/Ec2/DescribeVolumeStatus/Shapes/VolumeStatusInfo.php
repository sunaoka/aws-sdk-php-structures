<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<VolumeStatusDetails> $Details
 * @property 'ok'|'impaired'|'insufficient-data' $Status
 */
class VolumeStatusInfo extends Shape
{
    /**
     * @param array{
     *     Details?: list<VolumeStatusDetails>,
     *     Status?: 'ok'|'impaired'|'insufficient-data'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
