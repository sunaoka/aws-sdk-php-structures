<?php

namespace Sunaoka\Aws\Structures\Lambda\ListFunctions\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $FunctionName
 * @property string|null $FunctionArn
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|'nodejs24.x'|null $Runtime
 * @property string|null $Role
 * @property string|null $Handler
 * @property int|null $CodeSize
 * @property string|null $Description
 * @property int<1, max>|null $Timeout
 * @property int<128, 10240>|null $MemorySize
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
 * @property 'Pending'|'Active'|'Inactive'|'Failed'|null $State
 * @property string|null $StateReason
 * @property 'Idle'|'Creating'|'Restoring'|'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|null $StateReasonCode
 * @property 'Successful'|'Failed'|'InProgress'|null $LastUpdateStatus
 * @property string|null $LastUpdateStatusReason
 * @property 'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|null $LastUpdateStatusReasonCode
 * @property list<FileSystemConfig>|null $FileSystemConfigs
 * @property 'Zip'|'Image'|null $PackageType
 * @property ImageConfigResponse|null $ImageConfigResponse
 * @property string|null $SigningProfileVersionArn
 * @property string|null $SigningJobArn
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property EphemeralStorage|null $EphemeralStorage
 * @property SnapStartResponse|null $SnapStart
 * @property RuntimeVersionConfig|null $RuntimeVersionConfig
 * @property LoggingConfig|null $LoggingConfig
 */
class FunctionConfiguration extends Shape
{
    /**
     * @param array{
     *     FunctionName?: string|null,
     *     FunctionArn?: string|null,
     *     Runtime?: 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|'nodejs24.x'|null,
     *     Role?: string|null,
     *     Handler?: string|null,
     *     CodeSize?: int|null,
     *     Description?: string|null,
     *     Timeout?: int<1, max>|null,
     *     MemorySize?: int<128, 10240>|null,
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
     *     State?: 'Pending'|'Active'|'Inactive'|'Failed'|null,
     *     StateReason?: string|null,
     *     StateReasonCode?: 'Idle'|'Creating'|'Restoring'|'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|null,
     *     LastUpdateStatus?: 'Successful'|'Failed'|'InProgress'|null,
     *     LastUpdateStatusReason?: string|null,
     *     LastUpdateStatusReasonCode?: 'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|null,
     *     FileSystemConfigs?: list<FileSystemConfig>|null,
     *     PackageType?: 'Zip'|'Image'|null,
     *     ImageConfigResponse?: ImageConfigResponse|null,
     *     SigningProfileVersionArn?: string|null,
     *     SigningJobArn?: string|null,
     *     Architectures?: list<'x86_64'|'arm64'>|null,
     *     EphemeralStorage?: EphemeralStorage|null,
     *     SnapStart?: SnapStartResponse|null,
     *     RuntimeVersionConfig?: RuntimeVersionConfig|null,
     *     LoggingConfig?: LoggingConfig|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
