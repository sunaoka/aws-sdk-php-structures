<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\ListIncidentRecords;

trait ListIncidentRecordsTrait
{
    /**
     * @param ListIncidentRecordsRequest $args
     * @return ListIncidentRecordsResponse
     */
    public function listIncidentRecords(ListIncidentRecordsRequest $args)
    {
        $result = parent::listIncidentRecords($args->toArray());
        return new ListIncidentRecordsResponse($result->toArray());
    }
}
