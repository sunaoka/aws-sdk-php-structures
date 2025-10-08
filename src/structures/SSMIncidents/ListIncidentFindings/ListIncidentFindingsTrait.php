<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentFindings;

trait ListIncidentFindingsTrait
{
    /**
     * @param ListIncidentFindingsRequest $args
     * @return ListIncidentFindingsResponse
     */
    public function listIncidentFindings(ListIncidentFindingsRequest $args)
    {
        $result = parent::listIncidentFindings($args->toArray());
        return new ListIncidentFindingsResponse($result->toArray());
    }
}
