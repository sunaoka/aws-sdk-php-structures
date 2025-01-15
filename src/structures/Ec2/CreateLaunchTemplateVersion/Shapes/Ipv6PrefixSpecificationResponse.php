<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateLaunchTemplateVersion\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv6Prefix
 */
class Ipv6PrefixSpecificationResponse extends Shape
{
    /**
     * @param array{Ipv6Prefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
