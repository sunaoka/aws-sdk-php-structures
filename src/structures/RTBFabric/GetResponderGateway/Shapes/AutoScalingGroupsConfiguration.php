<?php

namespace Sunaoka\Aws\Structures\RTBFabric\GetResponderGateway\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $autoScalingGroupNames
 * @property string $roleArn
 */
class AutoScalingGroupsConfiguration extends Shape
{
    /**
     * @param array{
     *     autoScalingGroupNames: list<string>,
     *     roleArn: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
