<?php

namespace Sunaoka\Aws\Structures\GuardDuty\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Ec2InstanceUids
 * @property string|null $Version
 */
class Ec2LaunchTemplate extends Shape
{
    /**
     * @param array{
     *     Ec2InstanceUids?: list<string>|null,
     *     Version?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
