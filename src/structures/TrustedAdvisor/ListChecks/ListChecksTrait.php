<?php

namespace Sunaoka\Aws\Structures\TrustedAdvisor\ListChecks;

trait ListChecksTrait
{
    /**
     * @param ListChecksRequest $args
     * @return ListChecksResponse
     */
    public function listChecks(ListChecksRequest $args)
    {
        $result = parent::listChecks($args->toArray());
        return new ListChecksResponse($result->toArray());
    }
}
