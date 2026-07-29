<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListDatasetDataSegmentRelationships;

trait ListDatasetDataSegmentRelationshipsTrait
{
    /**
     * @param ListDatasetDataSegmentRelationshipsRequest $args
     * @return ListDatasetDataSegmentRelationshipsResponse
     */
    public function listDatasetDataSegmentRelationships(ListDatasetDataSegmentRelationshipsRequest $args)
    {
        $result = parent::listDatasetDataSegmentRelationships($args->toArray());
        return new ListDatasetDataSegmentRelationshipsResponse($result->toArray());
    }
}
