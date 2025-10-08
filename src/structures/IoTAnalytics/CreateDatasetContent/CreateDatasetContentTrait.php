<?php

namespace Sunaoka\Aws\Structures\IoTAnalytics\CreateDatasetContent;

trait CreateDatasetContentTrait
{
    /**
     * @param CreateDatasetContentRequest $args
     * @return CreateDatasetContentResponse
     */
    public function createDatasetContent(CreateDatasetContentRequest $args)
    {
        $result = parent::createDatasetContent($args->toArray());
        return new CreateDatasetContentResponse($result->toArray());
    }
}
