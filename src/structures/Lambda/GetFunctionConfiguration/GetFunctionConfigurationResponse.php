<?php

namespace Sunaoka\Aws\Structures\Lambda\GetFunctionConfiguration;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $FunctionName
 * @property string|null $FunctionArn
 * @property 'nodejs'|'nodejs4.3'|'nodejs6.10'|'nodejs8.10'|'nodejs10.x'|'nodejs12.x'|'nodejs14.x'|'nodejs16.x'|'java8'|'java8.al2'|'java11'|'python2.7'|'python3.6'|'python3.7'|'python3.8'|'python3.9'|'dotnetcore1.0'|'dotnetcore2.0'|'dotnetcore2.1'|'dotnetcore3.1'|'dotnet6'|'dotnet8'|'nodejs4.3-edge'|'go1.x'|'ruby2.5'|'ruby2.7'|'provided'|'provided.al2'|'nodejs18.x'|'python3.10'|'java17'|'ruby3.2'|'ruby3.3'|'ruby3.4'|'python3.11'|'nodejs20.x'|'provided.al2023'|'python3.12'|'java21'|'python3.13'|'nodejs22.x'|null $Runtime
 * @property string|null $Role
 * @property string|null $Handler
 * @property int|null $CodeSize
 * @property string|null $Description
 * @property int<1, max>|null $Timeout
 * @property int<128, 10240>|null $MemorySize
 * @property string|null $LastModified
 * @property string|null $CodeSha256
 * @property string|null $Version
 * @property Shapes\VpcConfigResponse|null $VpcConfig
 * @property Shapes\DeadLetterConfig|null $DeadLetterConfig
 * @property Shapes\EnvironmentResponse|null $Environment
 * @property string|null $KMSKeyArn
 * @property Shapes\TracingConfigResponse|null $TracingConfig
 * @property string|null $MasterArn
 * @property string|null $RevisionId
 * @property list<Shapes\Layer>|null $Layers
 * @property 'Pending'|'Active'|'Inactive'|'Failed'|null $State
 * @property string|null $StateReason
 * @property 'Idle'|'Creating'|'Restoring'|'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|null $StateReasonCode
 * @property 'Successful'|'Failed'|'InProgress'|null $LastUpdateStatus
 * @property string|null $LastUpdateStatusReason
 * @property 'EniLimitExceeded'|'InsufficientRolePermissions'|'InvalidConfiguration'|'InternalError'|'SubnetOutOfIPAddresses'|'InvalidSubnet'|'InvalidSecurityGroup'|'ImageDeleted'|'ImageAccessDenied'|'InvalidImage'|'KMSKeyAccessDenied'|'KMSKeyNotFound'|'InvalidStateKMSKey'|'DisabledKMSKey'|'EFSIOError'|'EFSMountConnectivityError'|'EFSMountFailure'|'EFSMountTimeout'|'InvalidRuntime'|'InvalidZipFileException'|'FunctionError'|null $LastUpdateStatusReasonCode
 * @property list<Shapes\FileSystemConfig>|null $FileSystemConfigs
 * @property 'Zip'|'Image'|null $PackageType
 * @property Shapes\ImageConfigResponse|null $ImageConfigResponse
 * @property string|null $SigningProfileVersionArn
 * @property string|null $SigningJobArn
 * @property list<'x86_64'|'arm64'>|null $Architectures
 * @property Shapes\EphemeralStorage|null $EphemeralStorage
 * @property Shapes\SnapStartResponse|null $SnapStart
 * @property Shapes\RuntimeVersionConfig|null $RuntimeVersionConfig
 * @property Shapes\LoggingConfig|null $LoggingConfig
 */
class GetFunctionConfigurationResponse extends Response
{
}
