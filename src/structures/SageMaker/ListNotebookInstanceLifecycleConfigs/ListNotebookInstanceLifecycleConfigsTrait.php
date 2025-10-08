<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListNotebookInstanceLifecycleConfigs;

trait ListNotebookInstanceLifecycleConfigsTrait
{
    /**
     * @param ListNotebookInstanceLifecycleConfigsRequest $args
     * @return ListNotebookInstanceLifecycleConfigsResponse
     */
    public function listNotebookInstanceLifecycleConfigs(ListNotebookInstanceLifecycleConfigsRequest $args)
    {
        $result = parent::listNotebookInstanceLifecycleConfigs($args->toArray());
        return new ListNotebookInstanceLifecycleConfigsResponse($result->toArray());
    }
}
