<?php

namespace Sunaoka\Aws\Structures\AccessAnalyzer\ListPolicyGenerations;

trait ListPolicyGenerationsTrait
{
    /**
     * @param ListPolicyGenerationsRequest $args
     * @return ListPolicyGenerationsResponse
     */
    public function listPolicyGenerations(ListPolicyGenerationsRequest $args)
    {
        $result = parent::listPolicyGenerations($args->toArray());
        return new ListPolicyGenerationsResponse($result->toArray());
    }
}
