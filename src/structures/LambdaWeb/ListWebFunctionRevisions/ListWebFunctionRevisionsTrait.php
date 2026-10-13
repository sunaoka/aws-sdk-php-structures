<?php

namespace Sunaoka\Aws\Structures\LambdaWeb\ListWebFunctionRevisions;

trait ListWebFunctionRevisionsTrait
{
    /**
     * @param ListWebFunctionRevisionsRequest $args
     * @return ListWebFunctionRevisionsResponse
     */
    public function listWebFunctionRevisions(ListWebFunctionRevisionsRequest $args)
    {
        $result = parent::listWebFunctionRevisions($args->toArray());
        return new ListWebFunctionRevisionsResponse($result->toArray());
    }
}
