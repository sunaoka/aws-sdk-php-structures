<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelExplainabilityJobDefinition;

trait DeleteModelExplainabilityJobDefinitionTrait
{
    /**
     * @param DeleteModelExplainabilityJobDefinitionRequest $args
     * @return void
     */
    public function deleteModelExplainabilityJobDefinition(DeleteModelExplainabilityJobDefinitionRequest $args)
    {
        parent::deleteModelExplainabilityJobDefinition($args->toArray());
    }
}
