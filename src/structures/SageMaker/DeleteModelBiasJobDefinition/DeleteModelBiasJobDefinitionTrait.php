<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelBiasJobDefinition;

trait DeleteModelBiasJobDefinitionTrait
{
    /**
     * @param DeleteModelBiasJobDefinitionRequest $args
     * @return void
     */
    public function deleteModelBiasJobDefinition(DeleteModelBiasJobDefinitionRequest $args)
    {
        parent::deleteModelBiasJobDefinition($args->toArray());
    }
}
