<?php

namespace Sunaoka\Aws\Structures\SageMaker\DescribeImage;

use Sunaoka\Aws\Structures\Response;

/**
 * @property \Aws\Api\DateTimeResult $CreationTime
 * @property string $Description
 * @property string $DisplayName
 * @property string $FailureReason
 * @property string $ImageArn
 * @property string $ImageName
 * @property 'CREATING'|'CREATED'|'CREATE_FAILED'|'UPDATING'|'UPDATE_FAILED'|'DELETING'|'DELETE_FAILED' $ImageStatus
 * @property \Aws\Api\DateTimeResult $LastModifiedTime
 * @property string $RoleArn
 */
class DescribeImageResponse extends Response
{
}
