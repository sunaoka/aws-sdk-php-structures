<?php

namespace Sunaoka\Aws\Structures\Glue\StartMLEvaluationTaskRun;

trait StartMLEvaluationTaskRunTrait
{
    /**
     * @param StartMLEvaluationTaskRunRequest $args
     * @return StartMLEvaluationTaskRunResponse
     */
    public function startMLEvaluationTaskRun(StartMLEvaluationTaskRunRequest $args)
    {
        $result = parent::startMLEvaluationTaskRun($args->toArray());
        return new StartMLEvaluationTaskRunResponse($result->toArray());
    }
}
