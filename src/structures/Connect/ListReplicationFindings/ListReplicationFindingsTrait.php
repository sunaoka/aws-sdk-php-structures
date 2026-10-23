<?php

namespace Sunaoka\Aws\Structures\Connect\ListReplicationFindings;

trait ListReplicationFindingsTrait
{
    /**
     * @param ListReplicationFindingsRequest $args
     * @return ListReplicationFindingsResponse
     */
    public function listReplicationFindings(ListReplicationFindingsRequest $args)
    {
        $result = parent::listReplicationFindings($args->toArray());
        return new ListReplicationFindingsResponse($result->toArray());
    }
}
