<?php

namespace Sunaoka\Aws\Structures\Ssm\ListNodesSummary\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'AgentType'|'AgentVersion'|'ComputerName'|'InstanceId'|'InstanceStatus'|'IpAddress'|'ManagedStatus'|'PlatformName'|'PlatformType'|'PlatformVersion'|'ResourceType'|'OrganizationalUnitId'|'OrganizationalUnitPath'|'Region'|'AccountId' $Key
 * @property list<string> $Values
 * @property 'Equal'|'NotEqual'|'BeginWith' $Type
 */
class NodeFilter extends Shape
{
    /**
     * @param array{
     *     Key: 'AgentType'|'AgentVersion'|'ComputerName'|'InstanceId'|'InstanceStatus'|'IpAddress'|'ManagedStatus'|'PlatformName'|'PlatformType'|'PlatformVersion'|'ResourceType'|'OrganizationalUnitId'|'OrganizationalUnitPath'|'Region'|'AccountId',
     *     Values: list<string>,
     *     Type?: 'Equal'|'NotEqual'|'BeginWith'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
