<?php

namespace Sunaoka\Aws\Structures\OSIS\ListPipelines\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED' $Status
 * @property PipelineStatusReason $StatusReason
 * @property string $PipelineName
 * @property string $PipelineArn
 * @property int<1, max> $MinUnits
 * @property int<1, max> $MaxUnits
 * @property \Aws\Api\DateTimeResult $CreatedAt
 * @property \Aws\Api\DateTimeResult $LastUpdatedAt
 * @property list<PipelineDestination> $Destinations
 * @property list<Tag> $Tags
 */
class PipelineSummary extends Shape
{
    /**
     * @param array{
     *     Status?: 'CREATING'|'ACTIVE'|'UPDATING'|'DELETING'|'CREATE_FAILED'|'UPDATE_FAILED'|'STARTING'|'START_FAILED'|'STOPPING'|'STOPPED',
     *     StatusReason?: PipelineStatusReason,
     *     PipelineName?: string,
     *     PipelineArn?: string,
     *     MinUnits?: int<1, max>,
     *     MaxUnits?: int<1, max>,
     *     CreatedAt?: \Aws\Api\DateTimeResult,
     *     LastUpdatedAt?: \Aws\Api\DateTimeResult,
     *     Destinations?: list<PipelineDestination>,
     *     Tags?: list<Tag>
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
