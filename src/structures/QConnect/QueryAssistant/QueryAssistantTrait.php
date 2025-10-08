<?php

namespace Sunaoka\Aws\Structures\QConnect\QueryAssistant;

trait QueryAssistantTrait
{
    /**
     * @param QueryAssistantRequest $args
     * @return QueryAssistantResponse
     */
    public function queryAssistant(QueryAssistantRequest $args)
    {
        $result = parent::queryAssistant($args->toArray());
        return new QueryAssistantResponse($result->toArray());
    }
}
