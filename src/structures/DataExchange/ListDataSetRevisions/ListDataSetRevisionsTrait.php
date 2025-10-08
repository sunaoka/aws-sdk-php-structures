<?php

namespace Sunaoka\Aws\Structures\DataExchange\ListDataSetRevisions;

trait ListDataSetRevisionsTrait
{
    /**
     * @param ListDataSetRevisionsRequest $args
     * @return ListDataSetRevisionsResponse
     */
    public function listDataSetRevisions(ListDataSetRevisionsRequest $args)
    {
        $result = parent::listDataSetRevisions($args->toArray());
        return new ListDataSetRevisionsResponse($result->toArray());
    }
}
