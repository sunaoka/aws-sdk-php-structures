<?php

namespace Sunaoka\Aws\Structures\SageMaker\DeleteModelQualityJobDefinition;

trait DeleteModelQualityJobDefinitionTrait
{
    /**
     * @param DeleteModelQualityJobDefinitionRequest $args
     * @return void
     */
    public function deleteModelQualityJobDefinition(DeleteModelQualityJobDefinitionRequest $args)
    {
        parent::deleteModelQualityJobDefinition($args->toArray());
    }
}
