<?php

namespace Sunaoka\Aws\Structures\Lambda\ListVersionsByFunction\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionName
 * @property string|null $FunctionArn
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'nodejs18.x'|'nodejs20.x'|'nodejs22.x'|'nodejs24.x'|'java8'|'java8.al2'|'java11'|'java17'|'java21'|'java25'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'python3.10'|'python3.11'|'python3.12'|'python3.13'|'python3.14'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'dotnet10'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'ruby4.0'|'provided'|'provided.al2'|'provided.al2023'|'java8.al2023'|'java11.al2023'|'java17.al2023'|null $Runtime
 * @property string|null $Role
 * @property string|null $Handler
 * @property int|null $CodeSize
 * @property string|null $Description
 * @property int<1, 5400>|null $Timeout
 * @property int<128, 32768>|null $MemorySize
 * @property string|null $LastModified
 * @property string|null $CodeSha256
 * @property string|null $Version
 * @property VpcConfigResponse|null $VpcConfig
 * @property DeadLetterConfig|null $DeadLetterConfig
 * @property EnvironmentResponse|null $Environment
 * @property string|null $KMSKeyArn
 * @property TracingConfigResponse|null $TracingConfig
 * @property string|null $MasterArn
 * @property string|null $RevisionId
 * @property list<Layer>|null $Layers
 * @property 'Pending'|'Active'|'Inactive'|'Failed'|'Deactivating'|'Deactivated'|'ActiveNonInvocable'|'Deleting'|null $State
 * @property string|null $StateReason
 * @property 'Idle'|'Creating'|'Restoring'|'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|'ServiceQuotaExceededException'|'VcpuLimitExceeded'|'CapacityProviderScalingLimitExceeded'|'InsufficientCapacity'|'EC2RequestLimitExceeded'|'FunctionError.InitTimeout'|'FunctionError.RuntimeInitError'|'FunctionError.ExtensionInitError'|'FunctionError.InvalidEntryPoint'|'FunctionError.InvalidWorkingDirectory'|'FunctionError.PermissionDenied'|'FunctionError.TooManyExtensions'|'FunctionError.InitResourceExhausted'|'DisallowedByVpcEncryptionControl'|'DrainingDurableExecutions'|null $StateReasonCode
 * @property 'Successful'|'Failed'|'InProgress'|null $LastUpdateStatus
 * @property string|null $LastUpdateStatusReason
 * @property 'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|'ServiceQuotaExceededException'|'VcpuLimitExceeded'|'CapacityProviderScalingLimitExceeded'|'InsufficientCapacity'|'EC2RequestLimitExceeded'|'FunctionError.InitTimeout'|'FunctionError.RuntimeInitError'|'FunctionError.ExtensionInitError'|'FunctionError.InvalidEntryPoint'|'FunctionError.InvalidWorkingDirectory'|'FunctionError.PermissionDenied'|'FunctionError.TooManyExtensions'|'FunctionError.InitResourceExhausted'|'DisallowedByVpcEncryptionControl'|null $LastUpdateStatusReasonCode
 * @property list<FileSystemConfig>|null $FileSystemConfigs
 * @property string|null $SigningProfileVersionArn
 * @property string|null $SigningJobArn
 * @property 'Zip'|'Image'|null $PackageType
 * @property ImageConfigResponse|null $ImageConfigResponse
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property EphemeralStorage|null $EphemeralStorage
 * @property SnapStartResponse|null $SnapStart
 * @property RuntimeVersionConfig|null $RuntimeVersionConfig
 * @property LoggingConfig|null $LoggingConfig
 * @property TenancyConfig|null $TenancyConfig
 * @property CapacityProviderConfig|null $CapacityProviderConfig
 * @property string|null $ConfigSha256
 * @property DurableConfig|null $DurableConfig
 */
class FunctionConfiguration extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string|null,
     *     FunctionArn?: string|null,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'nodejs18.x'|'nodejs20.x'|'nodejs22.x'|'nodejs24.x'|'java8'|'java8.al2'|'java11'|'java17'|'java21'|'java25'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'python3.10'|'python3.11'|'python3.12'|'python3.13'|'python3.14'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'dotnet10'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'ruby4.0'|'provided'|'provided.al2'|'provided.al2023'|'java8.al2023'|'java11.al2023'|'java17.al2023'|null,
     *     Role?: string|null,
     *     Handler?: string|null,
     *     CodeSize?: int|null,
     *     Description?: string|null,
     *     Timeout?: int<1, 5400>|null,
     *     MemorySize?: int<128, 32768>|null,
     *     LastModified?: string|null,
     *     CodeSha256?: string|null,
     *     Version?: string|null,
     *     VpcConfig?: VpcConfigResponse|null,
     *     DeadLetterConfig?: DeadLetterConfig|null,
     *     Environment?: EnvironmentResponse|null,
     *     KMSKeyArn?: string|null,
     *     TracingConfig?: TracingConfigResponse|null,
     *     MasterArn?: string|null,
     *     RevisionId?: string|null,
     *     Layers?: list<Layer>|null,
     *     State?: 'Pending'|'Active'|'Inactive'|'Failed'|'Deactivating'|'Deactivated'|'ActiveNonInvocable'|'Deleting'|null,
     *     StateReason?: string|null,
     *     StateReasonCode?: 'Idle'|'Creating'|'Restoring'|'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|'ServiceQuotaExceededException'|'VcpuLimitExceeded'|'CapacityProviderScalingLimitExceeded'|'InsufficientCapacity'|'EC2RequestLimitExceeded'|'FunctionError.InitTimeout'|'FunctionError.RuntimeInitError'|'FunctionError.ExtensionInitError'|'FunctionError.InvalidEntryPoint'|'FunctionError.InvalidWorkingDirectory'|'FunctionError.PermissionDenied'|'FunctionError.TooManyExtensions'|'FunctionError.InitResourceExhausted'|'DisallowedByVpcEncryptionControl'|'DrainingDurableExecutions'|null,
     *     LastUpdateStatus?: 'Successful'|'Failed'|'InProgress'|null,
     *     LastUpdateStatusReason?: string|null,
     *     LastUpdateStatusReasonCode?: 'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|'ServiceQuotaExceededException'|'VcpuLimitExceeded'|'CapacityProviderScalingLimitExceeded'|'InsufficientCapacity'|'EC2RequestLimitExceeded'|'FunctionError.InitTimeout'|'FunctionError.RuntimeInitError'|'FunctionError.ExtensionInitError'|'FunctionError.InvalidEntryPoint'|'FunctionError.InvalidWorkingDirectory'|'FunctionError.PermissionDenied'|'FunctionError.TooManyExtensions'|'FunctionError.InitResourceExhausted'|'DisallowedByVpcEncryptionControl'|null,
     *     FileSystemConfigs?: list<FileSystemConfig>|null,
     *     SigningProfileVersionArn?: string|null,
     *     SigningJobArn?: string|null,
     *     PackageType?: 'Zip'|'Image'|null,
     *     ImageConfigResponse?: ImageConfigResponse|null,
     *     Architectures?: list<'x86_64'|'arm64'>|null,
     *     EphemeralStorage?: EphemeralStorage|null,
     *     SnapStart?: SnapStartResponse|null,
     *     RuntimeVersionConfig?: RuntimeVersionConfig|null,
     *     LoggingConfig?: LoggingConfig|null,
     *     TenancyConfig?: TenancyConfig|null,
     *     CapacityProviderConfig?: CapacityProviderConfig|null,
     *     ConfigSha256?: string|null,
     *     DurableConfig?: DurableConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
