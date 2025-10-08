<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListNotebookInstances;

trait ListNotebookInstancesTrait
{
    /**
     * @param ListNotebookInstancesRequest $args
     * @return ListNotebookInstancesResponse
     */
    public function listNotebookInstances(ListNotebookInstancesRequest $args)
    {
        $result = parent::listNotebookInstances($args->toArray());
        return new ListNotebookInstancesResponse($result->toArray());
    }
}
