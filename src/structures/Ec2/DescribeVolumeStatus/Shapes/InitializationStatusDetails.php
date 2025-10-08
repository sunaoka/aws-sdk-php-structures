<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeVolumeStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default'|'provisioned-rate'|null $InitializationType
 * @property int|null $Progress
 * @property int|null $EstimatedTimeToCompleteInSeconds
 */
class InitializationStatusDetails extends Shape
{
    /**
     * @param array{
     *     InitializationType?: 'default'|'provisioned-rate'|null,
     *     Progress?: int|null,
     *     EstimatedTimeToCompleteInSeconds?: int|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
