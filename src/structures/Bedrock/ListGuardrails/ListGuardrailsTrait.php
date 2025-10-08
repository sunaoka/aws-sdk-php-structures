<?php

namespace Sunaoka\Aws\Structures\Bedrock\ListGuardrails;

trait ListGuardrailsTrait
{
    /**
     * @param ListGuardrailsRequest $args
     * @return ListGuardrailsResponse
     */
    public function listGuardrails(ListGuardrailsRequest $args)
    {
        $result = parent::listGuardrails($args->toArray());
        return new ListGuardrailsResponse($result->toArray());
    }
}
