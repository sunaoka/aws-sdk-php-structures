<?php

namespace Sunaoka\Aws\Structures\CleanRoomsML\ListTrainingDatasets;

trait ListTrainingDatasetsTrait
{
    /**
     * @param ListTrainingDatasetsRequest $args
     * @return ListTrainingDatasetsResponse
     */
    public function listTrainingDatasets(ListTrainingDatasetsRequest $args)
    {
        $result = parent::listTrainingDatasets($args->toArray());
        return new ListTrainingDatasetsResponse($result->toArray());
    }
}
