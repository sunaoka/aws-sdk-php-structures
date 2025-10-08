<?php

namespace Sunaoka\Aws\Structures\SageMaker\StartNotebookInstance;

trait StartNotebookInstanceTrait
{
    /**
     * @param StartNotebookInstanceRequest $args
     * @return void
     */
    public function startNotebookInstance(StartNotebookInstanceRequest $args)
    {
        parent::startNotebookInstance($args->toArray());
    }
}
