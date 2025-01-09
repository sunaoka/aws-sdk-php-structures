<?php

namespace Sunaoka\Aws\Structures\OpsWorks\UpdateStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $StackId
 * @property string $Name
 * @property array<'Color', string> $Attributes
 * @property string $ServiceRoleArn
 * @property string $DefaultInstanceProfileArn
 * @property string $DefaultOs
 * @property string $HostnameTheme
 * @property string $DefaultAvailabilityZone
 * @property string $DefaultSubnetId
 * @property string $CustomJson
 * @property Shapes\StackConfigurationManager $ConfigurationManager
 * @property Shapes\ChefConfiguration $ChefConfiguration
 * @property bool $UseCustomCookbooks
 * @property Shapes\Source $CustomCookbooksSource
 * @property string $DefaultSshKeyName
 * @property 'ebs'|'instance-store' $DefaultRootDeviceType
 * @property bool $UseOpsworksSecurityGroups
 * @property string $AgentVersion
 */
class UpdateStackRequest extends Request
{
    /**
     * @param array{
     *     StackId: string,
     *     Name?: string,
     *     Attributes?: array<'Color', string>,
     *     ServiceRoleArn?: string,
     *     DefaultInstanceProfileArn?: string,
     *     DefaultOs?: string,
     *     HostnameTheme?: string,
     *     DefaultAvailabilityZone?: string,
     *     DefaultSubnetId?: string,
     *     CustomJson?: string,
     *     ConfigurationManager?: Shapes\StackConfigurationManager,
     *     ChefConfiguration?: Shapes\ChefConfiguration,
     *     UseCustomCookbooks?: bool,
     *     CustomCookbooksSource?: Shapes\Source,
     *     DefaultSshKeyName?: string,
     *     DefaultRootDeviceType?: 'ebs'|'instance-store',
     *     UseOpsworksSecurityGroups?: bool,
     *     AgentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
