<?php

namespace Sunaoka\Aws\Structures\CloudFormation\ListChangeSets;

trait ListChangeSetsTrait
{
    /**
     * @param ListChangeSetsRequest $args
     * @return ListChangeSetsResponse
     */
    public function listChangeSets(ListChangeSetsRequest $args)
    {
        $result = parent::listChangeSets($args->toArray());
        return new ListChangeSetsResponse($result->toArray());
    }
}
