<?php

namespace Sunaoka\Aws\Structures\IoTSiteWise\ListInterfaceRelationships;

trait ListInterfaceRelationshipsTrait
{
    /**
     * @param ListInterfaceRelationshipsRequest $args
     * @return ListInterfaceRelationshipsResponse
     */
    public function listInterfaceRelationships(ListInterfaceRelationshipsRequest $args)
    {
        $result = parent::listInterfaceRelationships($args->toArray());
        return new ListInterfaceRelationshipsResponse($result->toArray());
    }
}
