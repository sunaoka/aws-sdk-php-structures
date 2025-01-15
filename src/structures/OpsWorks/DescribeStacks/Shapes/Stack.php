<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $StackId
 * @property string|null $Name
 * @property string|null $Arn
 * @property string|null $Region
 * @property string|null $VpcId
 * @property array<'Color', string>|null $Attributes
 * @property string|null $ServiceRoleArn
 * @property string|null $DefaultInstanceProfileArn
 * @property string|null $DefaultOs
 * @property string|null $HostnameTheme
 * @property string|null $DefaultAvailabilityZone
 * @property string|null $DefaultSubnetId
 * @property string|null $CustomJson
 * @property StackConfigurationManager|null $ConfigurationManager
 * @property ChefConfiguration|null $ChefConfiguration
 * @property bool|null $UseCustomCookbooks
 * @property bool|null $UseOpsworksSecurityGroups
 * @property Source|null $CustomCookbooksSource
 * @property string|null $DefaultSshKeyName
 * @property string|null $CreatedAt
 * @property 'ebs'|'instance-store'|null $DefaultRootDeviceType
 * @property string|null $AgentVersion
 */
class Stack extends Shape
{
    /**
     * @param array{
     *     StackId?: string|null,
     *     Name?: string|null,
     *     Arn?: string|null,
     *     Region?: string|null,
     *     VpcId?: string|null,
     *     Attributes?: array<'Color', string>|null,
     *     ServiceRoleArn?: string|null,
     *     DefaultInstanceProfileArn?: string|null,
     *     DefaultOs?: string|null,
     *     HostnameTheme?: string|null,
     *     DefaultAvailabilityZone?: string|null,
     *     DefaultSubnetId?: string|null,
     *     CustomJson?: string|null,
     *     ConfigurationManager?: StackConfigurationManager|null,
     *     ChefConfiguration?: ChefConfiguration|null,
     *     UseCustomCookbooks?: bool|null,
     *     UseOpsworksSecurityGroups?: bool|null,
     *     CustomCookbooksSource?: Source|null,
     *     DefaultSshKeyName?: string|null,
     *     CreatedAt?: string|null,
     *     DefaultRootDeviceType?: 'ebs'|'instance-store'|null,
     *     AgentVersion?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
