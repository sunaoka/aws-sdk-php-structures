<?php

namespace Sunaoka\Aws\Structures\Ec2\DescribeApplicationStatus\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<InstanceApplicationStatus>|null $Instances
 */
class ApplicationStatusesResponseType extends Shape
{
    /**
     * @param array{Instances?: list<InstanceApplicationStatus>|null} $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
