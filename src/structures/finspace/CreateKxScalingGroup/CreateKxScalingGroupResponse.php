<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxScalingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $environmentId
 * @property string $scalingGroupName
 * @property string $hostType
 * @property string $availabilityZoneId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 */
class CreateKxScalingGroupResponse extends Response
{
}
