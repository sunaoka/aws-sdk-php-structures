<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\UpdateIncidentRecord;

trait UpdateIncidentRecordTrait
{
    /**
     * @param UpdateIncidentRecordRequest $args
     * @return UpdateIncidentRecordResponse
     */
    public function updateIncidentRecord(UpdateIncidentRecordRequest $args)
    {
        $result = parent::updateIncidentRecord($args->toArray());
        return new UpdateIncidentRecordResponse($result->toArray());
    }
}
