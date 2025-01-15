<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CreateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $Name
 * @property string $Region
 * @property string|null $VpcId
 * @property array<'Color', string>|null $Attributes
 * @property string $ServiceRoleArn
 * @property string $DefaultInstanceProfileArn
 * @property string|null $DefaultOs
 * @property string|null $HostnameTheme
 * @property string|null $DefaultAvailabilityZone
 * @property string|null $DefaultSubnetId
 * @property string|null $CustomJson
 * @property Shapes\StackConfigurationManager|null $ConfigurationManager
 * @property Shapes\ChefConfiguration|null $ChefConfiguration
 * @property bool|null $UseCustomCookbooks
 * @property bool|null $UseOpsworksSecurityGroups
 * @property Shapes\Source|null $CustomCookbooksSource
 * @property string|null $DefaultSshKeyName
 * @property 'ebs'|'instance-store'|null $DefaultRootDeviceType
 * @property string|null $AgentVersion
 */
class CreateStackRequest extends Request
{
    /**
     * @param array{
     *     Name: string,
     *     Region: string,
     *     VpcId?: string|null,
     *     Attributes?: array<'Color', string>|null,
     *     ServiceRoleArn: string,
     *     DefaultInstanceProfileArn: string,
     *     DefaultOs?: string|null,
     *     HostnameTheme?: string|null,
     *     DefaultAvailabilityZone?: string|null,
     *     DefaultSubnetId?: string|null,
     *     CustomJson?: string|null,
     *     ConfigurationManager?: Shapes\StackConfigurationManager|null,
     *     ChefConfiguration?: Shapes\ChefConfiguration|null,
     *     UseCustomCookbooks?: bool|null,
     *     UseOpsworksSecurityGroups?: bool|null,
     *     CustomCookbooksSource?: Shapes\Source|null,
     *     DefaultSshKeyName?: string|null,
     *     DefaultRootDeviceType?: 'ebs'|'instance-store'|null,
     *     AgentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
