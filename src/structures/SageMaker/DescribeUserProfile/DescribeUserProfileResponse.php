<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeUserProfile;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainId
 * @property string $UserProfileArn
 * @property string $UserProfileName
 * @property string $HomeEfsFileSystemUid
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed' $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 * @property string $SingleSignOnUserIdentifier
 * @property string $SingleSignOnUserValue
 * @property Shapes\UserSettings $UserSettings
 */
class DescribeUserProfileResponse extends Response
{
}
