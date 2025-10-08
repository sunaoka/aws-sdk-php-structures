<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteFlowDefinition;

trait DeleteFlowDefinitionTrait
{
    /**
     * @param DeleteFlowDefinitionRequest $args
     * @return DeleteFlowDefinitionResponse
     */
    public function deleteFlowDefinition(DeleteFlowDefinitionRequest $args)
    {
        $result = parent::deleteFlowDefinition($args->toArray());
        return new DeleteFlowDefinitionResponse($result->toArray());
    }
}
