<?php

namespace Sunaoka\Aws\Structures\Personalize\ListDatasets;

trait ListDatasetsTrait
{
    /**
     * @param ListDatasetsRequest $args
     * @return ListDatasetsResponse
     */
    public function listDatasets(ListDatasetsRequest $args)
    {
        $result = parent::listDatasets($args->toArray());
        return new ListDatasetsResponse($result->toArray());
    }
}
