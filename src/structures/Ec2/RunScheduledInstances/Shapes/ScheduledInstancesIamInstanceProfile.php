<?php

namespace Sunaoka\Aws\Structures\Ec2\RunScheduledInstances\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $Arn
 * @property string|null $Name
 */
class ScheduledInstancesIamInstanceProfile extends Shape
{
    /**
     * @param array{
     *     Arn?: string|null,
     *     Name?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
