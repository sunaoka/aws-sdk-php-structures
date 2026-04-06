<?php

namespace Sunaoka\Aws\Structures\SupplyChain\ListDataLakeDatasets;

trait ListDataLakeDatasetsTrait
{
    /**
     * @param ListDataLakeDatasetsRequest $args
     * @return ListDataLakeDatasetsResponse
     */
    public function listDataLakeDatasets(ListDataLakeDatasetsRequest $args)
    {
        $result = parent::listDataLakeDatasets($args->toArray());
        return new ListDataLakeDatasetsResponse($result->toArray());
    }
}
