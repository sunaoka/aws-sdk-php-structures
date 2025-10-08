<?php

namespace Sunaoka\Aws\Structures\Transfer\ListAccesses;

trait ListAccessesTrait
{
    /**
     * @param ListAccessesRequest $args
     * @return ListAccessesResponse
     */
    public function listAccesses(ListAccessesRequest $args)
    {
        $result = parent::listAccesses($args->toArray());
        return new ListAccessesResponse($result->toArray());
    }
}
