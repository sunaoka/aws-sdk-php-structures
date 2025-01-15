<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxScalingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string|null $scalingGroupName
 * @property string|null $scalingGroupArn
 * @property string|null $hostType
 * @property list<string>|null $clusters
 * @property string|null $availabilityZoneId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 */
class GetKxScalingGroupResponse extends Response
{
}
