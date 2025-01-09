<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'default'|'vpc-1'|'ebs-1' $BandwidthWeighting
 */
class LaunchTemplateNetworkPerformanceOptions extends Shape
{
    /**
     * @param array{BandwidthWeighting?: 'default'|'vpc-1'|'ebs-1'} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
