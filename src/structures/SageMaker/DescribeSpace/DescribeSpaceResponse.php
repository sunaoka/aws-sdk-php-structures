<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeSpace;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $DomainId
 * @property string|null $SpaceArn
 * @property string|null $SpaceName
 * @property string|null $HomeEfsFileSystemUid
 * @property 'Deleting'|'Failed'|'InService'|'Pending'|'Updating'|'Update_Failed'|'Delete_Failed'|null $Status
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $FailureReason
 * @property Shapes\SpaceSettings|null $SpaceSettings
 */
class DescribeSpaceResponse extends Response
{
}
