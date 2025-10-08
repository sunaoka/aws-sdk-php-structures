<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteDataQualityJobDefinition;

trait DeleteDataQualityJobDefinitionTrait
{
    /**
     * @param DeleteDataQualityJobDefinitionRequest $args
     * @return void
     */
    public function deleteDataQualityJobDefinition(DeleteDataQualityJobDefinitionRequest $args)
    {
        parent::deleteDataQualityJobDefinition($args->toArray());
    }
}
