<?php

namespace Sunaoka\Aws\Structures\SageMaker\CreateNotebookInstance;

trait CreateNotebookInstanceTrait
{
    /**
     * @param CreateNotebookInstanceRequest $args
     * @return CreateNotebookInstanceResponse
     */
    public function createNotebookInstance(CreateNotebookInstanceRequest $args)
    {
        $result = parent::createNotebookInstance($args->toArray());
        return new CreateNotebookInstanceResponse($result->toArray());
    }
}
