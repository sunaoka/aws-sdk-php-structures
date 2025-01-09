<?php

namespace Sunaoka\Aws\Structures\SecurityHub\GetFindings\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property list<string> $Command
 * @property int $Cpu
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsDependsOnDetails> $DependsOn
 * @property bool $DisableNetworking
 * @property list<string> $DnsSearchDomains
 * @property list<string> $DnsServers
 * @property array<string, string> $DockerLabels
 * @property list<string> $DockerSecurityOptions
 * @property list<string> $EntryPoint
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentDetails> $Environment
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentFilesDetails> $EnvironmentFiles
 * @property bool $Essential
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsExtraHostsDetails> $ExtraHosts
 * @property AwsEcsTaskDefinitionContainerDefinitionsFirelensConfigurationDetails $FirelensConfiguration
 * @property AwsEcsTaskDefinitionContainerDefinitionsHealthCheckDetails $HealthCheck
 * @property string $Hostname
 * @property string $Image
 * @property bool $Interactive
 * @property list<string> $Links
 * @property AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDetails $LinuxParameters
 * @property AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationDetails $LogConfiguration
 * @property int $Memory
 * @property int $MemoryReservation
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsMountPointsDetails> $MountPoints
 * @property string $Name
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsPortMappingsDetails> $PortMappings
 * @property bool $Privileged
 * @property bool $PseudoTerminal
 * @property bool $ReadonlyRootFilesystem
 * @property AwsEcsTaskDefinitionContainerDefinitionsRepositoryCredentialsDetails $RepositoryCredentials
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsResourceRequirementsDetails> $ResourceRequirements
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsSecretsDetails> $Secrets
 * @property int $StartTimeout
 * @property int $StopTimeout
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsSystemControlsDetails> $SystemControls
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsUlimitsDetails> $Ulimits
 * @property string $User
 * @property list<AwsEcsTaskDefinitionContainerDefinitionsVolumesFromDetails> $VolumesFrom
 * @property string $WorkingDirectory
 */
class AwsEcsTaskDefinitionContainerDefinitionsDetails extends Shape
{
    /**
     * @param array{
     *     Command?: list<string>,
     *     Cpu?: int,
     *     DependsOn?: list<AwsEcsTaskDefinitionContainerDefinitionsDependsOnDetails>,
     *     DisableNetworking?: bool,
     *     DnsSearchDomains?: list<string>,
     *     DnsServers?: list<string>,
     *     DockerLabels?: array<string, string>,
     *     DockerSecurityOptions?: list<string>,
     *     EntryPoint?: list<string>,
     *     Environment?: list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentDetails>,
     *     EnvironmentFiles?: list<AwsEcsTaskDefinitionContainerDefinitionsEnvironmentFilesDetails>,
     *     Essential?: bool,
     *     ExtraHosts?: list<AwsEcsTaskDefinitionContainerDefinitionsExtraHostsDetails>,
     *     FirelensConfiguration?: AwsEcsTaskDefinitionContainerDefinitionsFirelensConfigurationDetails,
     *     HealthCheck?: AwsEcsTaskDefinitionContainerDefinitionsHealthCheckDetails,
     *     Hostname?: string,
     *     Image?: string,
     *     Interactive?: bool,
     *     Links?: list<string>,
     *     LinuxParameters?: AwsEcsTaskDefinitionContainerDefinitionsLinuxParametersDetails,
     *     LogConfiguration?: AwsEcsTaskDefinitionContainerDefinitionsLogConfigurationDetails,
     *     Memory?: int,
     *     MemoryReservation?: int,
     *     MountPoints?: list<AwsEcsTaskDefinitionContainerDefinitionsMountPointsDetails>,
     *     Name?: string,
     *     PortMappings?: list<AwsEcsTaskDefinitionContainerDefinitionsPortMappingsDetails>,
     *     Privileged?: bool,
     *     PseudoTerminal?: bool,
     *     ReadonlyRootFilesystem?: bool,
     *     RepositoryCredentials?: AwsEcsTaskDefinitionContainerDefinitionsRepositoryCredentialsDetails,
     *     ResourceRequirements?: list<AwsEcsTaskDefinitionContainerDefinitionsResourceRequirementsDetails>,
     *     Secrets?: list<AwsEcsTaskDefinitionContainerDefinitionsSecretsDetails>,
     *     StartTimeout?: int,
     *     StopTimeout?: int,
     *     SystemControls?: list<AwsEcsTaskDefinitionContainerDefinitionsSystemControlsDetails>,
     *     Ulimits?: list<AwsEcsTaskDefinitionContainerDefinitionsUlimitsDetails>,
     *     User?: string,
     *     VolumesFrom?: list<AwsEcsTaskDefinitionContainerDefinitionsVolumesFromDetails>,
     *     WorkingDirectory?: string
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
