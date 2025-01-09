<?php

namespace Sunaoka\Aws\Structures\finspace\GetKxScalingGroup;

use Sunaoka\Aws\Structures\Response;

/**
 * @property string $scalingGroupName
 * @property string $scalingGroupArn
 * @property string $hostType
 * @property list<string> $clusters
 * @property string $availabilityZoneId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 */
class GetKxScalingGroupResponse extends Response
{
}
