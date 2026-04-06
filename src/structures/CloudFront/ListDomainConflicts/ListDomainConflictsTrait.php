<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListDomainConflicts;

trait ListDomainConflictsTrait
{
    /**
     * @param ListDomainConflictsRequest $args
     * @return ListDomainConflictsResponse
     */
    public function listDomainConflicts(ListDomainConflictsRequest $args)
    {
        $result = parent::listDomainConflicts($args->toArray());
        return new ListDomainConflictsResponse($result->toArray());
    }
}
