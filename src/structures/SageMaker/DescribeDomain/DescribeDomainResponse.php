<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainArn
 * @property string|null $DomainId
 * @property string|null $DomainName
 * @property string|null $HomeEfsFileSystemId
 * @property string|null $SingleSignOnManagedApplicationInstanceId
 * @property string|null $SingleSignOnApplicationArn
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $FailureReason
 * @property string|null $SecurityGroupIdForDomainBoundary
 * @property 'SSO'|'IAM'|null $AuthMode
 * @property Shapes\UserSettings|null $DefaultUserSettings
 * @property Shapes\DomainSettings|null $DomainSettings
 * @property 'PublicInternetOnly'|'VpcOnly'|null $AppNetworkAccessType
 * @property string|null $HomeEfsFileSystemKmsKeyId
 * @property list<string>|null $SubnetIds
 * @property string|null $Url
 * @property string|null $VpcId
 * @property string|null $KmsKeyId
 * @property 'Service'|'Customer'|null $AppSecurityGroupManagement
 * @property 'ENABLED'|'DISABLED'|null $TagPropagation
 * @property Shapes\DefaultSpaceSettings|null $DefaultSpaceSettings
 */
class DescribeDomainResponse extends Response
{
}
