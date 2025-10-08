<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModel;

trait DeleteModelTrait
{
    /**
     * @param DeleteModelRequest $args
     * @return void
     */
    public function deleteModel(DeleteModelRequest $args)
    {
        parent::deleteModel($args->toArray());
    }
}
