<?php

namespace Sunaoka\Aws\Structures\Glue\StartMLLabelingSetGenerationTaskRun;

trait StartMLLabelingSetGenerationTaskRunTrait
{
    /**
     * @param StartMLLabelingSetGenerationTaskRunRequest $args
     * @return StartMLLabelingSetGenerationTaskRunResponse
     */
    public function startMLLabelingSetGenerationTaskRun(StartMLLabelingSetGenerationTaskRunRequest $args)
    {
        $result = parent::startMLLabelingSetGenerationTaskRun($args->toArray());
        return new StartMLLabelingSetGenerationTaskRunResponse($result->toArray());
    }
}
