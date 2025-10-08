<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\ListDatasetContents;

trait ListDatasetContentsTrait
{
    /**
     * @param ListDatasetContentsRequest $args
     * @return ListDatasetContentsResponse
     */
    public function listDatasetContents(ListDatasetContentsRequest $args)
    {
        $result = parent::listDatasetContents($args->toArray());
        return new ListDatasetContentsResponse($result->toArray());
    }
}
