<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListEdgeDeploymentPlans;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $NextToken
 * @property int $MaxResults
 * @property \Aws\Api\DateTimeResult $CreationTimeAfter
 * @property \Aws\Api\DateTimeResult $CreationTimeBefore
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeAfter
 * @property \Aws\Api\DateTimeResult $LastModifiedTimeBefore
 * @property string $NameContains
 * @property string $DeviceFleetNameContains
 * @property 'NAME'|'DEVICE_FLEET_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME' $SortBy
 * @property 'Ascending'|'Descending' $SortOrder
 */
class ListEdgeDeploymentPlansRequest extends Request
{
    /**
     * @param array{
     *     NextToken?: string,
     *     MaxResults?: int,
     *     CreationTimeAfter?: \Aws\Api\DateTimeResult,
     *     CreationTimeBefore?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeAfter?: \Aws\Api\DateTimeResult,
     *     LastModifiedTimeBefore?: \Aws\Api\DateTimeResult,
     *     NameContains?: string,
     *     DeviceFleetNameContains?: string,
     *     SortBy?: 'NAME'|'DEVICE_FLEET_NAME'|'CREATION_TIME'|'LAST_MODIFIED_TIME',
     *     SortOrder?: 'Ascending'|'Descending'
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
