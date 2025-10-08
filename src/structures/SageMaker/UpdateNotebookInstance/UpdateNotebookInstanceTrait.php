<?php

namespace Sunaoka\Aws\Structures\SageMaker\UpdateNotebookInstance;

trait UpdateNotebookInstanceTrait
{
    /**
     * @param UpdateNotebookInstanceRequest $args
     * @return UpdateNotebookInstanceResponse
     */
    public function updateNotebookInstance(UpdateNotebookInstanceRequest $args)
    {
        $result = parent::updateNotebookInstance($args->toArray());
        return new UpdateNotebookInstanceResponse($result->toArray());
    }
}
