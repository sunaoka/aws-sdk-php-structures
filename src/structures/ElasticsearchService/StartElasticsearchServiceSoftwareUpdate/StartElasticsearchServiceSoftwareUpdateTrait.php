<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\StartElasticsearchServiceSoftwareUpdate;

trait StartElasticsearchServiceSoftwareUpdateTrait
{
    /**
     * @param StartElasticsearchServiceSoftwareUpdateRequest $args
     * @return StartElasticsearchServiceSoftwareUpdateResponse
     */
    public function startElasticsearchServiceSoftwareUpdate(StartElasticsearchServiceSoftwareUpdateRequest $args)
    {
        $result = parent::startElasticsearchServiceSoftwareUpdate($args->toArray());
        return new StartElasticsearchServiceSoftwareUpdateResponse($result->toArray());
    }
}
