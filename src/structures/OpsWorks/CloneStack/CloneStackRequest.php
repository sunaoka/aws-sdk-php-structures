<?php

namespace Sunaoka\Aws\Structures\OpsWorks\CloneStack;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $SourceStackId
 * @property string $Name
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
 * @property Shapes\StackConfigurationManager $ConfigurationManager
 * @property Shapes\ChefConfiguration $ChefConfiguration
 * @property bool $UseCustomCookbooks
 * @property bool $UseOpsworksSecurityGroups
 * @property Shapes\Source $CustomCookbooksSource
 * @property string $DefaultSshKeyName
 * @property bool $ClonePermissions
 * @property list<string> $CloneAppIds
 * @property 'ebs'|'instance-store' $DefaultRootDeviceType
 * @property string $AgentVersion
 */
class CloneStackRequest extends Request
{
    /**
     * @param array{
     *     SourceStackId: string,
     *     Name?: string,
     *     Region?: string,
     *     VpcId?: string,
     *     Attributes?: array<'Color', string>,
     *     ServiceRoleArn: string,
     *     DefaultInstanceProfileArn?: string,
     *     DefaultOs?: string,
     *     HostnameTheme?: string,
     *     DefaultAvailabilityZone?: string,
     *     DefaultSubnetId?: string,
     *     CustomJson?: string,
     *     ConfigurationManager?: Shapes\StackConfigurationManager,
     *     ChefConfiguration?: Shapes\ChefConfiguration,
     *     UseCustomCookbooks?: bool,
     *     UseOpsworksSecurityGroups?: bool,
     *     CustomCookbooksSource?: Shapes\Source,
     *     DefaultSshKeyName?: string,
     *     ClonePermissions?: bool,
     *     CloneAppIds?: list<string>,
     *     DefaultRootDeviceType?: 'ebs'|'instance-store',
     *     AgentVersion?: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
