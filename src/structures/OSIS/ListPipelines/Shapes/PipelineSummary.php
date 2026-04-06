<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED'|null $Status
 * @property PipelineStatusReason|null $StatusReason
 * @property string|null $PipelineName
 * @property string|null $PipelineArn
 * @property int<1, max>|null $MinUnits
 * @property int<1, max>|null $MaxUnits
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 * @property list<PipelineDestination>|null $Destinations
 * @property list<Tag>|null $Tags
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED'|null,
     *     StatusReason?: PipelineStatusReason|null,
     *     PipelineName?: string|null,
     *     PipelineArn?: string|null,
     *     MinUnits?: int<1, max>|null,
     *     MaxUnits?: int<1, max>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null,
     *     Destinations?: list<PipelineDestination>|null,
     *     Tags?: list<Tag>|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
