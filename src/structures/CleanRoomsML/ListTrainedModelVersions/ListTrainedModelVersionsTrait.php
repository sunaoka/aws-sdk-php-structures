<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainedModelVersions;

trait ListTrainedModelVersionsTrait
{
    /**
     * @param ListTrainedModelVersionsRequest $args
     * @return ListTrainedModelVersionsResponse
     */
    public function listTrainedModelVersions(ListTrainedModelVersionsRequest $args)
    {
        $result = parent::listTrainedModelVersions($args->toArray());
        return new ListTrainedModelVersionsResponse($result->toArray());
    }
}
