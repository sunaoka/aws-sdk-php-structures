<?php

namespace Sunaoka\Aws\Structures\finspace\ListKxScalingGroups\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $scalingGroupName
 * @property string|null $hostType
 * @property list<string>|null $clusters
 * @property string|null $availabilityZoneId
 * @property 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null $status
 * @property string|null $statusReason
 * @property \Aws\Api\DateTimeResult|null $lastModifiedTimestamp
 * @property \Aws\Api\DateTimeResult|null $createdTimestamp
 */
class KxScalingGroup extends Shape
{
    /**
     * @param array{
     *     scalingGroupName?: string|null,
     *     hostType?: string|null,
     *     clusters?: list<string>|null,
     *     availabilityZoneId?: string|null,
     *     status?: 'CREATING'|'CREATE_FAILED'|'ACTIVE'|'DELETING'|'DELETED'|'DELETE_FAILED'|null,
     *     statusReason?: string|null,
     *     lastModifiedTimestamp?: \Aws\Api\DateTimeResult|null,
     *     createdTimestamp?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
