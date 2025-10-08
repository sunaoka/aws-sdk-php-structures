<?php

namespace Sunaoka\Aws\Structures\Batch\RegisterJobDefinition;

trait RegisterJobDefinitionTrait
{
    /**
     * @param RegisterJobDefinitionRequest $args
     * @return RegisterJobDefinitionResponse
     */
    public function registerJobDefinition(RegisterJobDefinitionRequest $args)
    {
        $result = parent::registerJobDefinition($args->toArray());
        return new RegisterJobDefinitionResponse($result->toArray());
    }
}
