<?php

namespace Sunaoka\Aws\Structures\Ssm\DescribeInstanceProperties\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'InstanceIds'|'AgentVersion'|'PingStatus'|'PlatformTypes'|'DocumentName'|'ActivationIds'|'IamRole'|'ResourceType'|'AssociationStatus' $key
 * @property list<string> $valueSet
 */
class InstancePropertyFilter extends Shape
{
    /**
     * @param array{
     *     key: 'InstanceIds'|'AgentVersion'|'PingStatus'|'PlatformTypes'|'DocumentName'|'ActivationIds'|'IamRole'|'ResourceType'|'AssociationStatus',
     *     valueSet: list<string>
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
