<?php

namespace Sunaoka\Aws\Structures\Ec2\GetLaunchTemplateData\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Ipv4Prefix
 */
class Ipv4PrefixSpecificationResponse extends Shape
{
    /**
     * @param array{Ipv4Prefix?: string|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
