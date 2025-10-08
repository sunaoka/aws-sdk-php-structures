<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateNotebookInstanceLifecycleConfig;

trait CreateNotebookInstanceLifecycleConfigTrait
{
    /**
     * @param CreateNotebookInstanceLifecycleConfigRequest $args
     * @return CreateNotebookInstanceLifecycleConfigResponse
     */
    public function createNotebookInstanceLifecycleConfig(CreateNotebookInstanceLifecycleConfigRequest $args)
    {
        $result = parent::createNotebookInstanceLifecycleConfig($args->toArray());
        return new CreateNotebookInstanceLifecycleConfigResponse($result->toArray());
    }
}
