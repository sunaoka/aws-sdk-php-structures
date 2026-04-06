<?php

namespace Sunaoka\Aws\Structures\DataZone\ListDataProductRevisions;

trait ListDataProductRevisionsTrait
{
    /**
     * @param ListDataProductRevisionsRequest $args
     * @return ListDataProductRevisionsResponse
     */
    public function listDataProductRevisions(ListDataProductRevisionsRequest $args)
    {
        $result = parent::listDataProductRevisions($args->toArray());
        return new ListDataProductRevisionsResponse($result->toArray());
    }
}
