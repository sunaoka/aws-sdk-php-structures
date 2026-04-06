<?php

namespace Sunaoka\Aws\Structures\QConnect\ListAIGuardrailVersions;

trait ListAIGuardrailVersionsTrait
{
    /**
     * @param ListAIGuardrailVersionsRequest $args
     * @return ListAIGuardrailVersionsResponse
     */
    public function listAIGuardrailVersions(ListAIGuardrailVersionsRequest $args)
    {
        $result = parent::listAIGuardrailVersions($args->toArray());
        return new ListAIGuardrailVersionsResponse($result->toArray());
    }
}
