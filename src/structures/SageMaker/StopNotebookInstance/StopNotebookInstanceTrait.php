<?php

namespace Sunaoka\Aws\Structures\SageMaker\StopNotebookInstance;

trait StopNotebookInstanceTrait
{
    /**
     * @param StopNotebookInstanceRequest $args
     * @return void
     */
    public function stopNotebookInstance(StopNotebookInstanceRequest $args)
    {
        parent::stopNotebookInstance($args->toArray());
    }
}
