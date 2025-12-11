<?php

namespace Sunaoka\Aws\Structures\PartnerCentralChannel\ListRelationships;

trait ListRelationshipsTrait
{
    /**
     * @param ListRelationshipsRequest $args
     * @return ListRelationshipsResponse
     */
    public function listRelationships(ListRelationshipsRequest $args)
    {
        $result = parent::listRelationships($args->toArray());
        return new ListRelationshipsResponse($result->toArray());
    }
}
