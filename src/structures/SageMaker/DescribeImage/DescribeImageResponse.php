<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property string|null $Description
 * @property string|null $DisplayName
 * @property string|null $FailureReason
 * @property string|null $ImageArn
 * @property string|null $ImageName
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED'|null $ImageStatus
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property string|null $RoleArn
 */
class DescribeImageResponse extends Response
{
}
