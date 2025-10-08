<?php

namespace Sunaoka\Aws\Structures\EKS\ListUpdates;

trait ListUpdatesTrait
{
    /**
     * @param ListUpdatesRequest $args
     * @return ListUpdatesResponse
     */
    public function listUpdates(ListUpdatesRequest $args)
    {
        $result = parent::listUpdates($args->toArray());
        return new ListUpdatesResponse($result->toArray());
    }
}
