<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeModelPackageGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $ModelPackageGroupName
 * @property string $ModelPackageGroupArn
 * @property string|null $ModelPackageGroupDescription
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property 'Pending'|'InProgress'|'Completed'|'Failed'|'Deleting'|'DeleteFailed' $ModelPackageGroupStatus
 */
class DescribeModelPackageGroupResponse extends Response
{
}
