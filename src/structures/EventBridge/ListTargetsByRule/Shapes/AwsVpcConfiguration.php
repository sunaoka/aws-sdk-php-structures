<?php

namespace Sunaoka\Aws\Structures\EventBridge\ListTargetsByRule\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Subnets
 * @property list<string>|null $SecurityGroups
 * @property 'ENABLED'|'DISABLED'|null $AssignPublicIp
 */
class AwsVpcConfiguration extends Shape
{
    /**
     * @param array{
     *     Subnets: list<string>,
     *     SecurityGroups?: list<string>|null,
     *     AssignPublicIp?: 'ENABLED'|'DISABLED'|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
