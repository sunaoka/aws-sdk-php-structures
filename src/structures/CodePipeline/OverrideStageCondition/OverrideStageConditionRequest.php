<?php

namespace Sunaoka\Aws\Structures\CodePipeline\OverrideStageCondition;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $stageName
 * @property string $pipelineExecutionId
 * @property 'BEFORE_ENTRY'|'ON_SUCCESS' $conditionType
 */
class OverrideStageConditionRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     stageName: string,
     *     pipelineExecutionId: string,
     *     conditionType: 'BEFORE_ENTRY'|'ON_SUCCESS'
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
