<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListKeyGroups;

trait ListKeyGroupsTrait
{
    /**
     * @param ListKeyGroupsRequest $args
     * @return ListKeyGroupsResponse
     */
    public function listKeyGroups(ListKeyGroupsRequest $args)
    {
        $result = parent::listKeyGroups($args->toArray());
        return new ListKeyGroupsResponse($result->toArray());
    }
}
