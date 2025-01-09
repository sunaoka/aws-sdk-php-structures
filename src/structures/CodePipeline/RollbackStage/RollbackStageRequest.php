<?php

namespace Sunaoka\Aws\Structures\CodePipeline\RollbackStage;

use Sunaoka\Aws\Structures\Request;

/**
 * @property string $pipelineName
 * @property string $stageName
 * @property string $targetPipelineExecutionId
 */
class RollbackStageRequest extends Request
{
    /**
     * @param array{
     *     pipelineName: string,
     *     stageName: string,
     *     targetPipelineExecutionId: string
     * } $args
     */
    public function __construct(array $args)
    {
        $this->__data = $args;
    }
}
