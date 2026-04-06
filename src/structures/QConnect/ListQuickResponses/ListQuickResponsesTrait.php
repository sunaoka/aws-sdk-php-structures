<?php

namespace Sunaoka\Aws\Structures\QConnect\ListQuickResponses;

trait ListQuickResponsesTrait
{
    /**
     * @param ListQuickResponsesRequest $args
     * @return ListQuickResponsesResponse
     */
    public function listQuickResponses(ListQuickResponsesRequest $args)
    {
        $result = parent::listQuickResponses($args->toArray());
        return new ListQuickResponsesResponse($result->toArray());
    }
}
