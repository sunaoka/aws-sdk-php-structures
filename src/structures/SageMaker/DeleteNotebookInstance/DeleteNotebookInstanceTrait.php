<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteNotebookInstance;

trait DeleteNotebookInstanceTrait
{
    /**
     * @param DeleteNotebookInstanceRequest $args
     * @return void
     */
    public function deleteNotebookInstance(DeleteNotebookInstanceRequest $args)
    {
        parent::deleteNotebookInstance($args->toArray());
    }
}
