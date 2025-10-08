<?php

namespace Sunaoka\Aws\Structures\SageMaker\Search\Shapes;

use Sunaoka\Aws\Structures\Shape;

/**
 * @property string|null $PipelineArn
 * @property int<1, max>|null $PipelineVersionId
 * @property string|null $PipelineVersionDisplayName
 * @property string|null $PipelineVersionDescription
 * @property \Aws\Api\DateTimeResult|null $CreationTime
 * @property \Aws\Api\DateTimeResult|null $LastModifiedTime
 * @property UserContext|null $CreatedBy
 * @property UserContext|null $LastModifiedBy
 * @property string|null $LastExecutedPipelineExecutionArn
 * @property string|null $LastExecutedPipelineExecutionDisplayName
 * @property 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null $LastExecutedPipelineExecutionStatus
 */
class PipelineVersion extends Shape
{
    /**
     * @param array{
     *     PipelineArn?: string|null,
     *     PipelineVersionId?: int<1, max>|null,
     *     PipelineVersionDisplayName?: string|null,
     *     PipelineVersionDescription?: string|null,
     *     CreationTime?: \Aws\Api\DateTimeResult|null,
     *     LastModifiedTime?: \Aws\Api\DateTimeResult|null,
     *     CreatedBy?: UserContext|null,
     *     LastModifiedBy?: UserContext|null,
     *     LastExecutedPipelineExecutionArn?: string|null,
     *     LastExecutedPipelineExecutionDisplayName?: string|null,
     *     LastExecutedPipelineExecutionStatus?: 'Executing'|'Stopping'|'Stopped'|'Failed'|'Succeeded'|null
     * } $args
     */
    public function __construct(array $args = [])
    {
        $this->__data = $args;
    }
}
