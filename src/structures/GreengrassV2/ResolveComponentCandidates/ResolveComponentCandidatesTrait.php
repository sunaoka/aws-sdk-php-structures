<?php

namespace Sunaoka\Aws\Structures\GreengrassV2\ResolveComponentCandidates;

trait ResolveComponentCandidatesTrait
{
    /**
     * @param ResolveComponentCandidatesRequest $args
     * @return ResolveComponentCandidatesResponse
     */
    public function resolveComponentCandidates(ResolveComponentCandidatesRequest $args)
    {
        $result = parent::resolveComponentCandidates($args->toArray());
        return new ResolveComponentCandidatesResponse($result->toArray());
    }
}
