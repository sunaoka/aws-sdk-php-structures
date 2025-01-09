<?php

namespace Sunaoka\Aws\Structures\Scheduler\CreateSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED' $AssignPublicIp
 * @property list<string> $SecurityGroups
 * @property list<string> $Subnets
 */
class AwsVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     AssignPublicIp?: 'ENABLED'|'DISABLED',
     *     SecurityGroups?: list<string>,
     *     Subnets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
