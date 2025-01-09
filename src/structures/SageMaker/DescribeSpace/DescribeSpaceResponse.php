<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $DomainId
 * @property string $SpaceArn
 * @property string $SpaceName
 * @property string $HomeEfsFileSystemUid
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed' $Status
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $FailureReason
 * @property Shapes\SpaceSettings $SpaceSettings
 * @property Shapes\OwnershipSettings $OwnershipSettings
 * @property Shapes\SpaceSharingSettings $SpaceSharingSettings
 * @property string $SpaceDisplayName
 * @property string $Url
 */
class DescribeSpaceResponse extends Response
{
}
