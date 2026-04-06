<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string|null $Name
 * @property array<'Color', string>|null $Attributes
 * @property string|null $ServiceRoleArn
 * @property string|null $DefaultInstanceProfileArn
 * @property string|null $DefaultOs
 * @property string|null $HostnameTheme
 * @property string|null $DefaultAvailabilityZone
 * @property string|null $DefaultSubnetId
 * @property string|null $CustomJson
 * @property Shapes\StackConfigurationManager|null $ConfigurationManager
 * @property Shapes\ChefConfiguration|null $ChefConfiguration
 * @property bool|null $UseCustomCookbooks
 * @property Shapes\Source|null $CustomCookbooksSource
 * @property string|null $DefaultSshKeyName
 * @property 'ebs'|'instance-store'|null $DefaultRootDeviceType
 * @property bool|null $UseOpsworksSecurityGroups
 * @property string|null $AgentVersion
 */
class UpdateStackRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     Name?: string|null,
     *     Attributes?: array<'Color', string>|null,
     *     ServiceRoleArn?: string|null,
     *     DefaultInstanceProfileArn?: string|null,
     *     DefaultOs?: string|null,
     *     HostnameTheme?: string|null,
     *     DefaultAvailabilityZone?: string|null,
     *     DefaultSubnetId?: string|null,
     *     CustomJson?: string|null,
     *     ConfigurationManager?: Shapes\StackConfigurationManager|null,
     *     ChefConfiguration?: Shapes\ChefConfiguration|null,
     *     UseCustomCookbooks?: bool|null,
     *     CustomCookbooksSource?: Shapes\Source|null,
     *     DefaultSshKeyName?: string|null,
     *     DefaultRootDeviceType?: 'ebs'|'instance-store'|null,
     *     UseOpsworksSecurityGroups?: bool|null,
     *     AgentVersion?: string|null
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
