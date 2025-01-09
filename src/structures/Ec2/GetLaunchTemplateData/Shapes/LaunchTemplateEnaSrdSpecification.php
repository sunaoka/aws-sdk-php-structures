<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool $EnaSrdEnabled
 * @property LaunchTemplateEnaSrdUdpSpecification $EnaSrdUdpSpecification
 */
class LaunchTemplateEnaSrdSpecification extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool,
     *     EnaSrdUdpSpecification?: LaunchTemplateEnaSrdUdpSpecification
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
