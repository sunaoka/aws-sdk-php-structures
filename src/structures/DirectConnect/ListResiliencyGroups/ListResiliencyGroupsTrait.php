<?php

namespace Sunaoka\Aws\Structures\DirectConnect\ListResiliencyGroups;

trait ListResiliencyGroupsTrait
{
    /**
     * @param ListResiliencyGroupsRequest $args
     * @return ListResiliencyGroupsResponse
     */
    public function listResiliencyGroups(ListResiliencyGroupsRequest $args)
    {
        $result = parent::listResiliencyGroups($args->toArray());
        return new ListResiliencyGroupsResponse($result->toArray());
    }
}
