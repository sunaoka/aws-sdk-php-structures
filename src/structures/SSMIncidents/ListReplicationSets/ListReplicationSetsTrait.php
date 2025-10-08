<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListReplicationSets;

trait ListReplicationSetsTrait
{
    /**
     * @param ListReplicationSetsRequest $args
     * @return ListReplicationSetsResponse
     */
    public function listReplicationSets(ListReplicationSetsRequest $args)
    {
        $result = parent::listReplicationSets($args->toArray());
        return new ListReplicationSetsResponse($result->toArray());
    }
}
