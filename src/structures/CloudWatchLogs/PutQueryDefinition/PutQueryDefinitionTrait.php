<?php

namespace Sunaoka\Aws\Structures\CloudWatchLogs\PutQueryDefinition;

trait PutQueryDefinitionTrait
{
    /**
     * @param PutQueryDefinitionRequest $args
     * @return PutQueryDefinitionResponse
     */
    public function putQueryDefinition(PutQueryDefinitionRequest $args)
    {
        $result = parent::putQueryDefinition($args->toArray());
        return new PutQueryDefinitionResponse($result->toArray());
    }
}
