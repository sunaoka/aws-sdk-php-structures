<?php

namespace Sunaoka\Aws\Structures\ElasticsearchService\CancelElasticsearchServiceSoftwareUpdate;

trait CancelElasticsearchServiceSoftwareUpdateTrait
{
    /**
     * @param CancelElasticsearchServiceSoftwareUpdateRequest $args
     * @return CancelElasticsearchServiceSoftwareUpdateResponse
     */
    public function cancelElasticsearchServiceSoftwareUpdate(CancelElasticsearchServiceSoftwareUpdateRequest $args)
    {
        $result = parent::cancelElasticsearchServiceSoftwareUpdate($args->toArray());
        return new CancelElasticsearchServiceSoftwareUpdateResponse($result->toArray());
    }
}
