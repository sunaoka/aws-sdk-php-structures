<?php

namespace Sunaoka\Aws\Structures\AgentRegistryControl\DeleteRegistryRecord;

trait DeleteRegistryRecordTrait
{
    /**
     * @param DeleteRegistryRecordRequest $args
     * @return DeleteRegistryRecordResponse
     */
    public function deleteRegistryRecord(DeleteRegistryRecordRequest $args)
    {
        $result = parent::deleteRegistryRecord($args->toArray());
        return new DeleteRegistryRecordResponse($result->toArray());
    }
}
