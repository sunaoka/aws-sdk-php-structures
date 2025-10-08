<?php

namespace Sunaoka\Aws\Structures\SageMaker\ListHubContents;

trait ListHubContentsTrait
{
    /**
     * @param ListHubContentsRequest $args
     * @return ListHubContentsResponse
     */
    public function listHubContents(ListHubContentsRequest $args)
    {
        $result = parent::listHubContents($args->toArray());
        return new ListHubContentsResponse($result->toArray());
    }
}
