<?php

namespace Sunaoka\Aws\Structures\MainframeModernization\ListBatchJobRestartPoints;

trait ListBatchJobRestartPointsTrait
{
    /**
     * @param ListBatchJobRestartPointsRequest $args
     * @return ListBatchJobRestartPointsResponse
     */
    public function listBatchJobRestartPoints(ListBatchJobRestartPointsRequest $args)
    {
        $result = parent::listBatchJobRestartPoints($args->toArray());
        return new ListBatchJobRestartPointsResponse($result->toArray());
    }
}
