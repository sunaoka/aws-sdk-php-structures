<?php

namespace Sunaoka\Aws\Structures\finspace\CreateKxScalingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $environmentId
 * @property string|null $scalingGroupName
 * @property string|null $hostType
 * @property string|null $availabilityZoneId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 */
class CreateKxScalingGroupResponse extends Response
{
}
