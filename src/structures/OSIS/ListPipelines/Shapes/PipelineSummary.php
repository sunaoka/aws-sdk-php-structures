<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED'|null $Status
 * @property PipelineStatusReason|null $StatusReason
 * @property string|null $PipelineName
 * @property string|null $PipelineArn
 * @property int<1, 96>|null $MinUnits
 * @property int<1, 96>|null $MaxUnits
 * @property \Aws\Api\DateTimeResult|null $CreatedAt
 * @property \Aws\Api\DateTimeResult|null $LastUpdatedAt
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED'|null,
     *     StatusReason?: PipelineStatusReason|null,
     *     PipelineName?: string|null,
     *     PipelineArn?: string|null,
     *     MinUnits?: int<1, 96>|null,
     *     MaxUnits?: int<1, 96>|null,
     *     CreatedAt?: \Aws\Api\DateTimeResult|null,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
