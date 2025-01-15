<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLineageGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $LineageGroupName
 * @property string|null $LineageGroupArn
 * @property string|null $DisplayName
 * @property string|null $Description
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property Shapes\UserContext|null $CreatedBy
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property Shapes\UserContext|null $LastModifiedBy
 */
class DescribeLineageGroupResponse extends Response
{
}
