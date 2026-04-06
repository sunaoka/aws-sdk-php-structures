<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeDomain;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainArn
 * @property string|null $DomainId
 * @property string|null $DomainName
 * @property string|null $HomeEfsFileSystemId
 * @property string|null $SingleSignOnManagedApplicationInstanceId
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $FailureReason
 * @property 'SSO'|'IAM'|null $AuthMode
 * @property Shapes\UserSettings|null $DefaultUserSettings
 * @property 'PublicInternetOnly'|'VpcOnly'|null $AppNetworkAccessType
 * @property string|null $HomeEfsFileSystemKmsKeyId
 * @property list<string>|null $SubnetIds
 * @property string|null $Url
 * @property string|null $VpcId
 * @property string|null $KmsKeyId
 * @property Shapes\DomainSettings|null $DomainSettings
 * @property 'Service'|'Customer'|null $AppSecurityGroupManagement
 * @property string|null $SecurityGroupIdForDomainBoundary
 * @property Shapes\DefaultSpaceSettings|null $DefaultSpaceSettings
 */
class DescribeDomainResponse extends Response
{
}
