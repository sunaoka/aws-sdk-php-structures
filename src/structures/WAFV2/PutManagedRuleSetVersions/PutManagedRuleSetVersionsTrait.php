<?php

namespace Sunaoka\Aws\Structures\WAFV2\PutManagedRuleSetVersions;

trait PutManagedRuleSetVersionsTrait
{
    /**
     * @param PutManagedRuleSetVersionsRequest $args
     * @return PutManagedRuleSetVersionsResponse
     */
    public function putManagedRuleSetVersions(PutManagedRuleSetVersionsRequest $args)
    {
        $result = parent::putManagedRuleSetVersions($args->toArray());
        return new PutManagedRuleSetVersionsResponse($result->toArray());
    }
}
