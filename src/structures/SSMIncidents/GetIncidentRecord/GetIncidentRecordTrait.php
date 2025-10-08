<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\GetIncidentRecord;

trait GetIncidentRecordTrait
{
    /**
     * @param GetIncidentRecordRequest $args
     * @return GetIncidentRecordResponse
     */
    public function getIncidentRecord(GetIncidentRecordRequest $args)
    {
        $result = parent::getIncidentRecord($args->toArray());
        return new GetIncidentRecordResponse($result->toArray());
    }
}
