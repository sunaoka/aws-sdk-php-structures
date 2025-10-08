<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateNotebookInstanceLifecycleConfig;

trait UpdateNotebookInstanceLifecycleConfigTrait
{
    /**
     * @param UpdateNotebookInstanceLifecycleConfigRequest $args
     * @return UpdateNotebookInstanceLifecycleConfigResponse
     */
    public function updateNotebookInstanceLifecycleConfig(UpdateNotebookInstanceLifecycleConfigRequest $args)
    {
        $result = parent::updateNotebookInstanceLifecycleConfig($args->toArray());
        return new UpdateNotebookInstanceLifecycleConfigResponse($result->toArray());
    }
}
