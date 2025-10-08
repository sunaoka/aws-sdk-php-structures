<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\BatchGetApplicationRevisions;

trait BatchGetApplicationRevisionsTrait
{
    /**
     * @param BatchGetApplicationRevisionsRequest $args
     * @return BatchGetApplicationRevisionsResponse
     */
    public function batchGetApplicationRevisions(BatchGetApplicationRevisionsRequest $args)
    {
        $result = parent::batchGetApplicationRevisions($args->toArray());
        return new BatchGetApplicationRevisionsResponse($result->toArray());
    }
}
