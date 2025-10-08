<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteNotebookInstanceLifecycleConfig;

trait DeleteNotebookInstanceLifecycleConfigTrait
{
    /**
     * @param DeleteNotebookInstanceLifecycleConfigRequest $args
     * @return void
     */
    public function deleteNotebookInstanceLifecycleConfig(DeleteNotebookInstanceLifecycleConfigRequest $args)
    {
        parent::deleteNotebookInstanceLifecycleConfig($args->toArray());
    }
}
