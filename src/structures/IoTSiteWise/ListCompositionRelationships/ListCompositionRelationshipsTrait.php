<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListCompositionRelationships;

trait ListCompositionRelationshipsTrait
{
    /**
     * @param ListCompositionRelationshipsRequest $args
     * @return ListCompositionRelationshipsResponse
     */
    public function listCompositionRelationships(ListCompositionRelationshipsRequest $args)
    {
        $result = parent::listCompositionRelationships($args->toArray());
        return new ListCompositionRelationshipsResponse($result->toArray());
    }
}
