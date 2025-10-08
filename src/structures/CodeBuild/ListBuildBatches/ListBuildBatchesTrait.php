<?php

namespace Sunaoka\Aws\Structures\CodeBuild\ListBuildBatches;

trait ListBuildBatchesTrait
{
    /**
     * @param ListBuildBatchesRequest $args
     * @return ListBuildBatchesResponse
     */
    public function listBuildBatches(ListBuildBatchesRequest $args)
    {
        $result = parent::listBuildBatches($args->toArray());
        return new ListBuildBatchesResponse($result->toArray());
    }
}
