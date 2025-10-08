<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobDefinitions;

trait ListBatchJobDefinitionsTrait
{
    /**
     * @param ListBatchJobDefinitionsRequest $args
     * @return ListBatchJobDefinitionsResponse
     */
    public function listBatchJobDefinitions(ListBatchJobDefinitionsRequest $args)
    {
        $result = parent::listBatchJobDefinitions($args->toArray());
        return new ListBatchJobDefinitionsResponse($result->toArray());
    }
}
