<?php

namespace Sunaoka\Aws\Structures\CloudFront\ListConnectionGroups;

trait ListConnectionGroupsTrait
{
    /**
     * @param ListConnectionGroupsRequest $args
     * @return ListConnectionGroupsResponse
     */
    public function listConnectionGroups(ListConnectionGroupsRequest $args)
    {
        $result = parent::listConnectionGroups($args->toArray());
        return new ListConnectionGroupsResponse($result->toArray());
    }
}
