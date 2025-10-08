<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrails;

trait ListAIGuardrailsTrait
{
    /**
     * @param ListAIGuardrailsRequest $args
     * @return ListAIGuardrailsResponse
     */
    public function listAIGuardrails(ListAIGuardrailsRequest $args)
    {
        $result = parent::listAIGuardrails($args->toArray());
        return new ListAIGuardrailsResponse($result->toArray());
    }
}
