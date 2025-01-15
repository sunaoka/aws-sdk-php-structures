<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainId
 * @property string|null $UserProfileArn
 * @property string|null $UserProfileName
 * @property string|null $HomeEfsFileSystemUid
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FailureReason
 * @property string|null $SingleSignOnUserIdentifier
 * @property string|null $SingleSignOnUserValue
 * @property Shapes\UserSettings|null $UserSettings
 */
class DescribeUserProfileResponse extends Response
{
}
