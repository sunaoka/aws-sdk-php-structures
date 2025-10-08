<?php

namespace Sunaoka\Aws\Structures\Ec2\CreateFlowLogs;

trait CreateFlowLogsTrait
{
    /**
     * @param CreateFlowLogsRequest $args
     * @return CreateFlowLogsResponse
     */
    public function createFlowLogs(CreateFlowLogsRequest $args)
    {
        $result = parent::createFlowLogs($args->toArray());
        return new CreateFlowLogsResponse($result->toArray());
    }
}
