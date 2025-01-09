<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeLineageGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $LineageGroupName
 * @property string $LineageGroupArn
 * @property string $DisplayName
 * @property string $Description
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property Shapes\UserContext $CreatedBy
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property Shapes\UserContext $LastModifiedBy
 */
class DescribeLineageGroupResponse extends Response
{
}
