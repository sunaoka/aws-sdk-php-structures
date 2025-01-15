<?php

namespace Sunaoka\Aws\Structures\Scheduler\GetSchedule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'ENABLED'|'DISABLED'|null $AssignPublicIp
 * @property list<string>|null $SecurityGroups
 * @property list<string> $Subnets
 */
class AwsVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     AssignPublicIp?: 'ENABLED'|'DISABLED'|null,
     *     SecurityGroups?: list<string>|null,
     *     Subnets: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
