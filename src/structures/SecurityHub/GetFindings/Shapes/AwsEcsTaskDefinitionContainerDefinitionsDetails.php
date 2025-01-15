<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string>|null $Command
 * @property int|null $Cpu
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsDependsOnDetails>|null $DependsOn
 * @property bool|null $DisableNetworking
 * @property list<string>|null $DnsSearchDomains
 * @property list<string>|null $DnsServers
 * @property array<string, string>|null $DockerLabels
 * @property list<string>|null $DockerSecurityOptions
 * @property list<string>|null $EntryPoint
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentDetails>|null $Environment
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentFilesDetails>|null $EnvironmentFiles
 * @property bool|null $Essential
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsExtraHostsDetails>|null $ExtraHosts
 * @property AwsEcsTaskDefinitionContainerDefinitionsFirelensConfigurationDetails|null $FirelensConfiguration
 * @property AwsEcsTaskDefinitionContainerDefinitionsHealthCheckDetails|null $HealthCheck
 * @property string|null $Hostname
 * @property string|null $Image
 * @property bool|null $Interactive
 * @property list<string>|null $Links
 * @property AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDetails|null $LinuxParameters
 * @property AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationDetails|null $LogConfiguration
 * @property int|null $Memory
 * @property int|null $MemoryReservation
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsMountPointsDetails>|null $MountPoints
 * @property string|null $Name
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsPortMappingsDetails>|null $PortMappings
 * @property bool|null $Privileged
 * @property bool|null $PseudoTerminal
 * @property bool|null $ReadonlyRootFilesystem
 * @property AwsEcsTaskDefinitionContainerDefinitionsRepositoryCredentialsDetails|null $RepositoryCredentials
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsResourceRequirementsDetails>|null $ResourceRequirements
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsSecretsDetails>|null $Secrets
 * @property int|null $StartTimeout
 * @property int|null $StopTimeout
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsSystemControlsDetails>|null $SystemControls
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsUlimitsDetails>|null $Ulimits
 * @property string|null $User
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsVolumesFromDetails>|null $VolumesFrom
 * @property string|null $WorkingDirectory
 */
class AwsEcsTaskDefinitionContainerDefinitionsDetails extends Shape
{
    /**
     * @param array{
     *     Command?: list<string>|null,
     *     Cpu?: int|null,
     *     DependsOn?: list<AwsEcsTaskDefinitionContainerDefinitionsDependsOnDetails>|null,
     *     DisableNetworking?: bool|null,
     *     DnsSearchDomains?: list<string>|null,
     *     DnsServers?: list<string>|null,
     *     DockerLabels?: array<string, string>|null,
     *     DockerSecurityOptions?: list<string>|null,
     *     EntryPoint?: list<string>|null,
     *     Environment?: list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentDetails>|null,
     *     EnvironmentFiles?: list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentFilesDetails>|null,
     *     Essential?: bool|null,
     *     ExtraHosts?: list<AwsEcsTaskDefinitionContainerDefinitionsExtraHostsDetails>|null,
     *     FirelensConfiguration?: AwsEcsTaskDefinitionContainerDefinitionsFirelensConfigurationDetails|null,
     *     HealthCheck?: AwsEcsTaskDefinitionContainerDefinitionsHealthCheckDetails|null,
     *     Hostname?: string|null,
     *     Image?: string|null,
     *     Interactive?: bool|null,
     *     Links?: list<string>|null,
     *     LinuxParameters?: AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDetails|null,
     *     LogConfiguration?: AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationDetails|null,
     *     Memory?: int|null,
     *     MemoryReservation?: int|null,
     *     MountPoints?: list<AwsEcsTaskDefinitionContainerDefinitionsMountPointsDetails>|null,
     *     Name?: string|null,
     *     PortMappings?: list<AwsEcsTaskDefinitionContainerDefinitionsPortMappingsDetails>|null,
     *     Privileged?: bool|null,
     *     PseudoTerminal?: bool|null,
     *     ReadonlyRootFilesystem?: bool|null,
     *     RepositoryCredentials?: AwsEcsTaskDefinitionContainerDefinitionsRepositoryCredentialsDetails|null,
     *     ResourceRequirements?: list<AwsEcsTaskDefinitionContainerDefinitionsResourceRequirementsDetails>|null,
     *     Secrets?: list<AwsEcsTaskDefinitionContainerDefinitionsSecretsDetails>|null,
     *     StartTimeout?: int|null,
     *     StopTimeout?: int|null,
     *     SystemControls?: list<AwsEcsTaskDefinitionContainerDefinitionsSystemControlsDetails>|null,
     *     Ulimits?: list<AwsEcsTaskDefinitionContainerDefinitionsUlimitsDetails>|null,
     *     User?: string|null,
     *     VolumesFrom?: list<AwsEcsTaskDefinitionContainerDefinitionsVolumesFromDetails>|null,
     *     WorkingDirectory?: string|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
