<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListStackSets;

trait ListStackSetsTrait
{
    /**
     * @param ListStackSetsRequest $args
     * @return ListStackSetsResponse
     */
    public function listStackSets(ListStackSetsRequest $args)
    {
        $result = parent::listStackSets($args->toArray());
        return new ListStackSetsResponse($result->toArray());
    }
}
