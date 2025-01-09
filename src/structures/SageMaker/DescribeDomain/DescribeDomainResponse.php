<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainArn
 * @property string $DomainId
 * @property string $DomainName
 * @property string $HomeEfsFileSystemId
 * @property string $SingleSignOnManagedApplicationInstanceId
 * @property string $SingleSignOnApplicationArn
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed' $Status
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $FailureReason
 * @property string $SecurityGroupIdForDomainBoundary
 * @property 'SSO'|'IAM' $AuthMode
 * @property Shapes\UserSettings $DefaultUserSettings
 * @property Shapes\DomainSettings $DomainSettings
 * @property 'PublicInternetOnly'|'VpcOnly' $AppNetworkAccessType
 * @property string $HomeEfsFileSystemKmsKeyId
 * @property list<string> $SubnetIds
 * @property string $Url
 * @property string $VpcId
 * @property string $KmsKeyId
 * @property 'Service'|'Customer' $AppSecurityGroupManagement
 * @property 'ENABLED'|'DISABLED' $TagPropagation
 * @property Shapes\DefaultSpaceSettings $DefaultSpaceSettings
 */
class DescribeDomainResponse extends Response
{
}
