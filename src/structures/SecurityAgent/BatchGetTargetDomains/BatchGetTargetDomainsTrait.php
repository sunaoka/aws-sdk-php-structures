<?php

namespace Sunaoka\Aws\Structures\SecurityAgent\BatchGetTargetDomains;

trait BatchGetTargetDomainsTrait
{
    /**
     * @param BatchGetTargetDomainsRequest $args
     * @return BatchGetTargetDomainsResponse
     */
    public function batchGetTargetDomains(BatchGetTargetDomainsRequest $args)
    {
        $result = parent::batchGetTargetDomains($args->toArray());
        return new BatchGetTargetDomainsResponse($result->toArray());
    }
}
