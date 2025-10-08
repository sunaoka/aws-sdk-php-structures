<?php

namespace Sunaoka\Aws\Structures\ResourceExplorer2\BatchGetView;

trait BatchGetViewTrait
{
    /**
     * @param BatchGetViewRequest $args
     * @return BatchGetViewResponse
     */
    public function batchGetView(BatchGetViewRequest $args)
    {
        $result = parent::batchGetView($args->toArray());
        return new BatchGetViewResponse($result->toArray());
    }
}
