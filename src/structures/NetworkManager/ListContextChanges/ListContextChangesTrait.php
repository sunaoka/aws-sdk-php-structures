<?php

namespace Sunaoka\Aws\Structures\NetworkManager\ListContextChanges;

trait ListContextChangesTrait
{
    /**
     * @param ListContextChangesRequest $args
     * @return ListContextChangesResponse
     */
    public function listContextChanges(ListContextChangesRequest $args)
    {
        $result = parent::listContextChanges($args->toArray());
        return new ListContextChangesResponse($result->toArray());
    }
}
