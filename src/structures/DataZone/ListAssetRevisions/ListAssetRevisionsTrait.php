<?php

namespace Sunaoka\Aws\Structures\DataZone\ListAssetRevisions;

trait ListAssetRevisionsTrait
{
    /**
     * @param ListAssetRevisionsRequest $args
     * @return ListAssetRevisionsResponse
     */
    public function listAssetRevisions(ListAssetRevisionsRequest $args)
    {
        $result = parent::listAssetRevisions($args->toArray());
        return new ListAssetRevisionsResponse($result->toArray());
    }
}
