<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\GetDatasetContent;

trait GetDatasetContentTrait
{
    /**
     * @param GetDatasetContentRequest $args
     * @return GetDatasetContentResponse
     */
    public function getDatasetContent(GetDatasetContentRequest $args)
    {
        $result = parent::getDatasetContent($args->toArray());
        return new GetDatasetContentResponse($result->toArray());
    }
}
