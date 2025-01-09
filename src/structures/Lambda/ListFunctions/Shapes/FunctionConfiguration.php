<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $FunctionName
 * @property string $FunctionArn
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x' $Runtime
 * @property string $Role
 * @property string $Handler
 * @property int $CodeSize
 * @property string $Description
 * @property int<1, max> $Timeout
 * @property int<128, 10240> $MemorySize
 * @property string $LastModified
 * @property string $CodeSha256
 * @property string $Version
 * @property VpcConfigResponse $VpcConfig
 * @property DeadLetterConfig $DeadLetterConfig
 * @property EnvironmentResponse $Environment
 * @property string $KMSKeyArn
 * @property TracingConfigResponse $TracingConfig
 * @property string $MasterArn
 * @property string $RevisionId
 * @property list<Layer> $Layers
 * @property 'Pending'|'Active'|'Inactive'|'Failed' $State
 * @property string $StateReason
 * @property 'Idle'|'Creating'|'Restoring'|'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError' $StateReasonCode
 * @property 'Successful'|'Failed'|'InProgress' $LastUpdateStatus
 * @property string $LastUpdateStatusReason
 * @property 'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError' $LastUpdateStatusReasonCode
 * @property list<FileSystemConfig> $FileSystemConfigs
 * @property 'Zip'|'Image' $PackageType
 * @property ImageConfigResponse $ImageConfigResponse
 * @property string $SigningProfileVersionArn
 * @property string $SigningJobArn
 * @property list<'x86_64'|'arm64'> $Architectures
 * @property EphemeralStorage $EphemeralStorage
 * @property SnapStartResponse $SnapStart
 * @property RuntimeVersionConfig $RuntimeVersionConfig
 * @property LoggingConfig $LoggingConfig
 */
class FunctionConfiguration extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string,
     *     FunctionArn?: string,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x',
     *     Role?: string,
     *     Handler?: string,
     *     CodeSize?: int,
     *     Description?: string,
     *     Timeout?: int<1, max>,
     *     MemorySize?: int<128, 10240>,
     *     LastModified?: string,
     *     CodeSha256?: string,
     *     Version?: string,
     *     VpcConfig?: VpcConfigResponse,
     *     DeadLetterConfig?: DeadLetterConfig,
     *     Environment?: EnvironmentResponse,
     *     KMSKeyArn?: string,
     *     TracingConfig?: TracingConfigResponse,
     *     MasterArn?: string,
     *     RevisionId?: string,
     *     Layers?: list<Layer>,
     *     State?: 'Pending'|'Active'|'Inactive'|'Failed',
     *     StateReason?: string,
     *     StateReasonCode?: 'Idle'|'Creating'|'Restoring'|'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError',
     *     LastUpdateStatus?: 'Successful'|'Failed'|'InProgress',
     *     LastUpdateStatusReason?: string,
     *     LastUpdateStatusReasonCode?: 'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError',
     *     FileSystemConfigs?: list<FileSystemConfig>,
     *     PackageType?: 'Zip'|'Image',
     *     ImageConfigResponse?: ImageConfigResponse,
     *     SigningProfileVersionArn?: string,
     *     SigningJobArn?: string,
     *     Architectures?: list<'x86_64'|'arm64'>,
     *     EphemeralStorage?: EphemeralStorage,
     *     SnapStart?: SnapStartResponse,
     *     RuntimeVersionConfig?: RuntimeVersionConfig,
     *     LoggingConfig?: LoggingConfig
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
