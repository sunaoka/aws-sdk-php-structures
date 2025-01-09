<?php

namespace Sunaoka\Aws\Structures\OpsWorks\DescribeStacks\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $StackId
 * @property string $Name
 * @property string $Arn
 * @property string $Region
 * @property string $VpcId
 * @property array<'Color', string> $Attributes
 * @property string $ServiceRoleArn
 * @property string $DefaultInstanceProfileArn
 * @property string $DefaultOs
 * @property string $HostnameTheme
 * @property string $DefaultAvailabilityZone
 * @property string $DefaultSubnetId
 * @property string $CustomJson
 * @property StackConfigurationManager $ConfigurationManager
 * @property ChefConfiguration $ChefConfiguration
 * @property bool $UseCustomCookbooks
 * @property bool $UseOpsworksSecurityGroups
 * @property Source $CustomCookbooksSource
 * @property string $DefaultSshKeyName
 * @property string $CreatedAt
 * @property 'ebs'|'instance-store' $DefaultRootDeviceType
 * @property string $AgentVersion
 */
class Stack extends Shape
{
    /**
     * @param array{
     *     StackId?: string,
     *     Name?: string,
     *     Arn?: string,
     *     Region?: string,
     *     VpcId?: string,
     *     Attributes?: array<'Color', string>,
     *     ServiceRoleArn?: string,
     *     DefaultInstanceProfileArn?: string,
     *     DefaultOs?: string,
     *     HostnameTheme?: string,
     *     DefaultAvailabilityZone?: string,
     *     DefaultSubnetId?: string,
     *     CustomJson?: string,
     *     ConfigurationManager?: StackConfigurationManager,
     *     ChefConfiguration?: ChefConfiguration,
     *     UseCustomCookbooks?: bool,
     *     UseOpsworksSecurityGroups?: bool,
     *     CustomCookbooksSource?: Source,
     *     DefaultSshKeyName?: string,
     *     CreatedAt?: string,
     *     DefaultRootDeviceType?: 'ebs'|'instance-store',
     *     AgentVersion?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
