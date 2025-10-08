<?php

namespace Sunaoka\Aws\Structures\SSMIncidents\DeleteIncidentRecord;

trait DeleteIncidentRecordTrait
{
    /**
     * @param DeleteIncidentRecordRequest $args
     * @return DeleteIncidentRecordResponse
     */
    public function deleteIncidentRecord(DeleteIncidentRecordRequest $args)
    {
        $result = parent::deleteIncidentRecord($args->toArray());
        return new DeleteIncidentRecordResponse($result->toArray());
    }
}
