<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgeDeploymentPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string|null $NextToken
 * @property int<min, 100>|null $MaxResults
 * @property \Aws\Api\DateTimeResult|null $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult|null $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTimeBefore
 * @property string|null $NameContains
 * @property string|null $DeviceFleetNameContains
 * @property 'NAME'|'DEVICE_FLEET_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME'|null $SortBy
 * @property 'Ascending'|'Descending'|null $SortOrder
 */
class ListEdgeDeploymentPlansRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string|null,
     *     MaxResults?: int<min, 100>|null,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult|null,
     *     NameContains?: string|null,
     *     DeviceFleetNameContains?: string|null,
     *     SortBy?: 'NAME'|'DEVICE_FLEET_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME'|null,
     *     SortOrder?: 'Ascending'|'Descending'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
