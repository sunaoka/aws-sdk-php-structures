<?php

namespace Sunaoka\Aws\Structures\Ec2\DeleteFlowLogs;

trait DeleteFlowLogsTrait
{
    /**
     * @param DeleteFlowLogsRequest $args
     * @return DeleteFlowLogsResponse
     */
    public function deleteFlowLogs(DeleteFlowLogsRequest $args)
    {
        $result = parent::deleteFlowLogs($args->toArray());
        return new DeleteFlowLogsResponse($result->toArray());
    }
}
