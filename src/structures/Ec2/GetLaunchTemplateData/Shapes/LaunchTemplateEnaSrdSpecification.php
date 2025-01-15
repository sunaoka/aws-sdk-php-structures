<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property bool|null $EnaSrdEnabled
 * @property LaunchTemplateEnaSrdUdpSpecification|null $EnaSrdUdpSpecification
 */
class LaunchTemplateEnaSrdSpecification extends Shape
{
    /**
     * @param array{
     *     EnaSrdEnabled?: bool|null,
     *     EnaSrdUdpSpecification?: LaunchTemplateEnaSrdUdpSpecification|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
