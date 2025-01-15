<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeInstanceTypes\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $SupportedVersions
 */
class NitroTpmInfo extends Shape
{
    /**
     * @param array{SupportedVersions?: list<string>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
