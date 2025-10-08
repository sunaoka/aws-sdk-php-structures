<?php

namespace Sunaoka\Aws\Structures\CodeDeploy\ListApplicationRevisions;

trait ListApplicationRevisionsTrait
{
    /**
     * @param ListApplicationRevisionsRequest $args
     * @return ListApplicationRevisionsResponse
     */
    public function listApplicationRevisions(ListApplicationRevisionsRequest $args)
    {
        $result = parent::listApplicationRevisions($args->toArray());
        return new ListApplicationRevisionsResponse($result->toArray());
    }
}
