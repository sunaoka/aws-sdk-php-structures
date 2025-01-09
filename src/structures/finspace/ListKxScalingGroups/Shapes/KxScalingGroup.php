<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string $scalingGroupName
 * @property string $hostType
 * @property list<string> $clusters
 * @property string $availabilityZoneId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED' $status
 * @property string $statusReason
 * @property \Aws\Api\DateTimeResult $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult $createdTimestamp
 */
class KxScalingGroup extends Shape
{
    /**
     * @param array{
     *     scalingGroupName?: string,
     *     hostType?: string,
     *     clusters?: list<string>,
     *     availabilityZoneId?: string,
     *     status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED',
     *     statusReason?: string,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult,
     *     createdTimestamp?: \Aws\Api\DateTimeResult
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
